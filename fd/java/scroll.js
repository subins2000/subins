
/**
 * jQuery.ScrollTo - Easy element scrolling using jQuery.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler@gmail.com | //flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 5/25/2009
 * @author Ariel Flesler
 * @version 1.4.2
 *
 * //flesler.blogspot.com/2007/10/jqueryscrollto.html
 */
;(function(d){var k=d.scrollTo=function(a,i,e){d(window).scrollTo(a,i,e)};k.defaults={axis:'xy',duration:parseFloat(d.fn.jquery)>=1.3?0:1};k.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){var a=this,i=!a.nodeName||d.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!i)return a;var e=(a.contentWindow||a).document||a.ownerDocument||a;return d.browser.safari||e.compatMode=='BackCompat'?e.body:e.documentElement})};d.fn.scrollTo=function(n,j,b){if(typeof j=='object'){b=j;j=0}if(typeof b=='function')b={onAfter:b};if(n=='max')n=9e9;b=d.extend({},k.defaults,b);j=j||b.speed||b.duration;b.queue=b.queue&&b.axis.length>1;if(b.queue)j/=2;b.offset=p(b.offset);b.over=p(b.over);return this._scrollable().each(function(){var q=this,r=d(q),f=n,s,g={},u=r.is('html,body');switch(typeof f){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(f)){f=p(f);break}f=d(f,this);case'object':if(f.is||f.style)s=(f=d(f)).offset()}d.each(b.axis.split(''),function(a,i){var e=i=='x'?'Left':'Top',h=e.toLowerCase(),c='scroll'+e,l=q[c],m=k.max(q,i);if(s){g[c]=s[h]+(u?0:l-r.offset()[h]);if(b.margin){g[c]-=parseInt(f.css('margin'+e))||0;g[c]-=parseInt(f.css('border'+e+'Width'))||0}g[c]+=b.offset[h]||0;if(b.over[h])g[c]+=f[i=='x'?'width':'height']()*b.over[h]}else{var o=f[h];g[c]=o.slice&&o.slice(-1)=='%'?parseFloat(o)/100*m:o}if(/^\d+$/.test(g[c]))g[c]=g[c]<=0?0:Math.min(g[c],m);if(!a&&b.queue){if(l!=g[c])t(b.onAfterFirst);delete g[c]}});t(b.onAfter);function t(a){r.animate(g,j,b.easing,a&&function(){a.call(this,n,b)})}}).end()};k.max=function(a,i){var e=i=='x'?'Width':'Height',h='scroll'+e;if(!d(a).is('html,body'))return a[h]-d(a)[e.toLowerCase()]();var c='client'+e,l=a.ownerDocument.documentElement,m=a.ownerDocument.body;return Math.max(l[h],m[h])-Math.min(l[c],m[c])};function p(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);
/*!
 * jQuery replaceText - v1.1 - 11/21/2009
 * //benalman.com/projects/jquery-replacetext-plugin/
 * 
 * Copyright (c) 2009 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * //benalman.com/about/license/
 */

// Script: jQuery replaceText: String replace for your jQueries!
//
// *Version: 1.1, Last updated: 11/21/2009*
// 
// Project Home - //benalman.com/projects/jquery-replacetext-plugin/
// GitHub       - //github.com/cowboy/jquery-replacetext/
// Source       - //github.com/cowboy/jquery-replacetext/raw/master/jquery.ba-replacetext.js
// (Minified)   - //github.com/cowboy/jquery-replacetext/raw/master/jquery.ba-replacetext.min.js (0.5kb)
// 
// About: License
// 
// Copyright (c) 2009 "Cowboy" Ben Alman,
// Dual licensed under the MIT and GPL licenses.
// //benalman.com/about/license/
// 
// About: Examples
// 
// This working example, complete with fully commented code, illustrates one way
// in which this plugin can be used.
// 
// replaceText - //benalman.com/code/projects/jquery-replacetext/examples/replacetext/
// 
// About: Support and Testing
// 
// Information about what version or versions of jQuery this plugin has been
// tested with, and what browsers it has been tested in.
// 
// jQuery Versions - 1.3.2, 1.4.1
// Browsers Tested - Internet Explorer 6-8, Firefox 2-3.6, Safari 3-4, Chrome, Opera 9.6-10.1.
// 
// About: Release History
// 
// 1.1 - (11/21/2009) Simplified the code and API substantially.
// 1.0 - (11/21/2009) Initial release

(function($){
  '$:nomunge'; // Used by YUI compressor.
  
  // Method: jQuery.fn.replaceText
  // 
  // Replace text in specified elements. Note that only text content will be
  // modified, leaving all tags and attributes untouched. The new text can be
  // either text or HTML.
  // 
  // Uses the String prototype replace method, full documentation on that method
  // can be found here: 
  // 
  // https://developer.mozilla.org/En/Core_JavaScript_1.5_Reference/Objects/String/Replace
  // 
  // Usage:
  // 
  // > jQuery('selector').replaceText( search, replace [, text_only ] );
  // 
  // Arguments:
  // 
  //  search - (RegExp|String) A RegExp object or substring to be replaced.
  //    Because the String prototype replace method is used internally, this
  //    argument should be specified accordingly.
  //  replace - (String|Function) The String that replaces the substring received
  //    from the search argument, or a function to be invoked to create the new
  //    substring. Because the String prototype replace method is used internally,
  //    this argument should be specified accordingly.
  //  text_only - (Boolean) If true, any HTML will be rendered as text. Defaults
  //    to false.
  // 
  // Returns:
  // 
  //  (jQuery) The initial jQuery collection of elements.
  
  $.fn.replaceText = function( search, replace, text_only ) {
    return this.each(function(){
      var node = this.firstChild,
        val,
        new_val,
        
        // Elements to be removed at the end.
        remove = [];
      
      // Only continue if firstChild exists.
      if ( node ) {
        
        // Loop over all childNodes.
        do {
          
          // Only process text nodes.
          if ( node.nodeType === 3 ) {
            
            // The original node value.
            val = node.nodeValue;
            
            // The new value.
            new_val = val.replace( search, replace );
            
            // Only replace text if the new value is actually different!
            if ( new_val !== val ) {
              
              if ( !text_only && /</.test( new_val ) ) {
                // The new value contains HTML, set it in a slower but far more
                // robust way.
                $(node).before( new_val );
                
                // Don't remove the node yet, or the loop will lose its place.
                remove.push( node );
              } else {
                // The new value contains no HTML, so it can be set in this
                // very fast, simple way.
                node.nodeValue = new_val;
              }
            }
          }
          
        } while ( node = node.nextSibling );
      }
      
      // Time to remove those elements!
      remove.length && $(remove).remove();
    });
  };  
  
})(jQuery);

(function () {function loadScript(url, callback) {var script = document.createElement("script");script.type = "text/javascript";if (script.readyState) { script.onreadystatechange = function () {if (script.readyState == "loaded" || script.readyState == "complete") {script.onreadystatechange = null;callback();}};} else {script.onload = function () {callback();};}script.src = url;document.getElementsByTagName("head")[0].appendChild(script);}loadScript("//cdn-subins.hp.af.cm/java/jquery.js", function () {doit();});})();function doit(){var type=$(document).find(".subins-like").attr('type');var href=$(document).find(".subins-like").attr('data-href');var it=$(document).find(".subins-like");if(type=='box'){it.replaceWith("<iframe src='//subins.hp.af.cm/dev/index.php?url="+href+"&style=box' frameborder='0' height='80' width='60'>");}else{it.replaceWith("<iframe src='//subins.hp.af.cm/dev/index.php?url="+href+"&style=lk' frameborder='0' height='80' width='60'>");}}

/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#password1");
	var name = $("#usernames");
	var nameInfo = $(".jfk-bubble-content-id");
	var email = $("#email");
	var emailInfo = $(".jfk-bubble-content-id");
	var pass1 = $("#pass");
	var pass1Info = $(".jfk-bubble-content-id");
	var pass2 = $("#pass2");
	var pass2Info = $(".jfk-bubble-content-id");
	var age = $("#age");
	var ageInfo = $(".jfk-bubble-content-id");
	
        //On Click
	name.click(validateName);
	email.click(validateEmail);
	pass1.click(validatePass1);
	pass2.click(validatePass2);
	age.click(validateage);
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	pass1.blur(validatePass1);
	pass2.blur(validatePass2);
	age.blur(validateage);
	//On key press
	name.keyup(validateName);
	pass1.keyup(validatePass1);
	pass2.keyup(validatePass2);
	age.keyup(validateage);
	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validatePass1() & validatePass2() & validateage()){
			return true}
		else{
			return false}
	});
	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: $(this).offset().top});
			email.removeClass("errort");
			emailInfo.html("You will need it when you lose your password!");
			emailInfo.addClass("sucess");
			return true;
		}
		//if it's NOT valid
		else{
			nameInfo.removeClass("sucess");
                         $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: $(this).offset().top});
			email.addClass("errort");
			emailInfo.html("Stop cowboy! Type a valid e-mail please :P");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: '215px'});
			name.addClass("errort");
			nameInfo.html("We want username with more than 3 letters!");
			nameInfo.addClass("error");
			nameInfo.removeClass("sucess");
			return false;
		}
		//if it's valid
		else{
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: '215px'});
			name.removeClass("errort");
			nameInfo.html("Username you want to login");
			nameInfo.addClass("sucess");
			return true;
		}
	}
	function validatePass1(){
		var a = $("#pass");
		var b = $("#pass2");
		//it's NOT valid
		if(pass1.val().length <5){
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: '275px'});
			pass1.addClass("errort");
			pass1Info.html("Ey! Remember: Use a secure password");
			pass1Info.addClass("error");
			return false;
			nameInfo.removeClass("sucess");
		}
		//it's valid
		else{		
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: '275px'});	
			pass1.removeClass("errort");
			pass1Info.html("Ey! Remember: Use a secure password");
			pass1Info.addClass("sucess");
			validatePass2();
			return true;
		}
	}
	function validatePass2(){
		var a = $("#pass");
		var b = $("#pass2");
		//are NOT valid
		if( pass1.val() != pass2.val() ){
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: '327px'});
			pass2.addClass("errort");
			nameInfo.removeClass("sucess");
			pass2Info.html("Passwords doesn't match!");
			pass2Info.addClass("error");
			return false;
		}
		//are valid
		else{
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: '327px'});
			pass2.removeClass("errort");
			pass2Info.html("Passwords match");
			pass2Info.addClass("sucess");
			return true;
		}
	}
	function validateage(){
		//it's NOT valid
                        $('.jfk-bubble').animate({top:parseFloat($(this).offset().top-120)});//{top: '439px'});
			pass2Info.html("Type your age here");
			var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
			if(numberRegex.test(age.val())) {
			pass2Info.html("Type your age here");
			pass2Info.addClass("sucess");
			age.removeClass("errort");
			}		
			else{
			nameInfo.removeClass("sucess");
			pass2Info.addClass("error");
			age.addClass("errort");
			pass2Info.html("Type a valid age here");
			}
		
	}
});

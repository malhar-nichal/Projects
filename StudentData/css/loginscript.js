
document.addEventListener ("DOMContentLoaded",
function  (){
	var user = Cookies.get ("username");
	var pass = Cookies.get ("password"); 
	console.log (user ); 
if (user != undefined && pass != undefined ) {
var username = document.getElementById ("username"); 
var password = document.getElementById ("password");
username.value = user;
password.value = pass; 

}




 document.getElementById("btn").addEventListener ("click" , function () {
var username = document.getElementById ("username").value; 
var password = document.getElementById ("password").value;
var check = document.getElementById ("checkbox").checked;
var content = document.getElementById ("contentError")	; 




	if ((username=="LTI" || username == "lti")  && password=="123" ){
		

		
	window.open ("indEx.html" , "_self"); 
} 
else {
		content.innerHTML= " <h5>Invalid Username/Password. Try Again! </h5>"; 
		document.getElementById ("username").value= ''; 
		document.getElementById ("password").value =''; 
}}); 
	
} ); 
	




document.addEventListener ("DOMContentLoaded",
function  (){



 document.getElementById("btn").addEventListener ("click" , function () {
var username = document.getElementById ("username").value; 
var password = document.getElementById ("password").value;

var content = document.getElementById ("contenterror")	; 




	if ((username=="LTI" || username == "lti")  && password=="123" ){
		
		
		localStorage.setItem ("username", username); 
		window.location.href = "templates/index.html"; 
	window.open ("templates/index.html"); 
} 
else {
		content.innerHTML= " <h5>Invalid&nbspUsername/Password.  Try&nbspAgain! </h5>"; 
		document.getElementById ("username").value= ''; 
		document.getElementById ("password").value =''; 
}}); 
	
} ); 
	



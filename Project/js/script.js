function submit (){
	console.log ("Ready"); 
	var user = document.getElementById ("userinp").value; 
	var pass = document.getElementById ("passinp").value;
	
if (user=="shankar"  && pass =="shivanya"){
	console.log ("Right password");
window.open ("register.html" , "_self");

}
else{
	alert ("Invalid Username or password"); 
window.open ("index.html","_self");	
}

}


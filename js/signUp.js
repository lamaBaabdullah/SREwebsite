function newSubmit(){
  document.getElementById("submit").onclick =  location.href = "AdminHome.html";
}

function validation() {



 x = document.forms["myForm"]["fname"].value;
 y = document.forms["myForm"]["lname"].value;
 z = document.forms["myForm"]["email"].value;
 p= document.forms["myForm"]["phone"].value;
 a = document.forms["myForm"]["password"].value;




if (x == "") {
    alert("First name must be filled out");
return false;
}



if (!/^[a-zA-Z]*$/g.test(x)){
	alert("First name must has no numbers");
return false;	
}


	    
if (y == "") {
    alert("Last name must be filled out");
	 return false;
	 }



	 
if (!/^[a-zA-Z]*$/g.test(y)){
	alert("Last name must has no numbers");
return false;	
}


if (z == "") {
    alert(" email must be filled out");
	 return false;
	 }


var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (!z.match(validRegex)) {
	 	alert("email is  invalid");
return false;	
}


if (p == "") {
    alert("phone number must be filled out");
	 return false;
	 }

if (p.length > 10 || p.length < 10 ){
alert("phone number must be 10 numbers");
return false;
}


if (isNaN(p)){
 alert("ID must be numbers not characters");
return false;
}

if (a == "") {
    alert("Password must be filled out");
	 return false;
	 }
	 if (!/[A-Z]/g.test(a)){
	alert("Password must contain capital letters");
return false;	
}
if (!/[a-z]/g.test(a)){
	alert("Password must contain small letters");
return false;	
}

if (!/[0-9]/g.test(a)){
	alert("Password must contain numbers");
return false;	
}

if (a.length < 8 ){
alert("Password must contain at least 8 characters");
return false;
}
 newSubmit();
}

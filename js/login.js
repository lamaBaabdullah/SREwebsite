function newSubmit(){
  document.getElementById("submit").onclick =  location.href = "AdminHome.html";
}


function validation() {


 b= document.forms["myForm"]["email"].value;
 a = document.forms["myForm"]["password"].value;



if (b == "") {
    alert("email must be filled out");
return false;
}

var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (!b.match(validRegex)) {
	 	alert("email is  invalid");
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

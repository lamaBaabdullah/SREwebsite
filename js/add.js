
function newSubmit(){
    document.getElementById("submit").onclick =  location.href = "AdminHome.php";
  }
  function newSubmit2(){
    document.getElementById("submit").onclick =  location.href = "reviews.php";
  }
  
  
  function Cancel(){
    document.getElementById("Cancel").onclick =  location.href = "AdminHome.php";
  }
  
    function Cancel2(){
    document.getElementById("Cancel").onclick =  location.href = "reviews.php";
  }
  
  
  function validation1(){

    var selected = document.getElementById('majors2');
    var a = document.forms["myForm"]["textarea"].value;
    var c = document.forms["myForm"]["text"].value;
     

    if(selected.options[selected.selectedIndex].value==" "){
        alert("Please choose a major");
        return false;  
    }
	
	if(c == ""){
        alert("Please enter electronics name");
    return false;
    }

    if(a ==""){
        alert("Please enter description");
    return false;
    }
    
  
  newSubmit();
   
  }



  function validation2(){
 
    var a = document.forms["myForm"]["textarea"].value;
    var c = document.forms["myForm"]["text"].value;
        
    if(c == ""){
        alert("Please enter electronics name");
    return false;
    } 
	
    if(a ==""){
        alert("Please enter description");
    return false;
    }

  
  newSubmit();
   
  }



  function validation3(){
 
    var a = document.forms["myForm"]["textarea"].value;

    if(a ==""){
        alert("Please enter your review");
    return false;
    }
	  newSubmit2();
  }
  

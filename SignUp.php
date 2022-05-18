<?php

 $connection = mysqli_connect("localhost", "root", "root", "SRE-4");
    $error = mysqli_connect_error();

    if ($error != null) {
        echo "<p> Couldn't connect to database</p>";
    }
    else{
         session_start();
        
         $AdminFN= $_POST['fname'];
         $AdminLN= $_POST['lname'];
         $AdminEmail= $_POST['email'];
         $AdminPhone= $_POST['phone'];
         $AdminPassword= $_POST['password'];
         
         $uppercase = preg_match('@[A-Z]@', $AdminPassword);
         $lowercase = preg_match('@[a-z]@', $AdminPassword);
         $number    = preg_match('@[0-9]@', $AdminPassword);
         $specialChars = preg_match('@[^\w]@', $AdminPassword);
   
        if(!empty($AdminFN)&&!empty($AdminLN)&&!empty($AdminEmail)&&!empty($AdminPhone)&&!empty($AdminPassword)){

         if (!preg_match('/^[a-zA-Z _]{3,50}+$/',$AdminFN)){	
              $_SESSION['signUp'] = "First name must be at least 3 letters";
              header("Location: sign-up.php");
         }
         else
         if (!preg_match('/^[a-zA-Z _]{3,50}+$/',$AdminLN)){	
              $_SESSION['signUp'] = "Last name must be at least 3 letters";
              header("Location: sign-up.php");
         }
         else
         if (!filter_var($AdminEmail, FILTER_VALIDATE_EMAIL)){
             $_SESSION['signUp'] = "Invalid email format";
              header("Location: sign-up.php");
         }
         else
         if(preg_match('/[^0-9]/',$AdminPhone)){
              $_SESSION['signUp'] = "Phone number must contain only numbers";
              header("Location: sign-up.php");
         }
         else
         if(!(strlen($AdminPhone) == 10)){
              $_SESSION['signUp'] = "Invalid phone number length <em>must have 10 numbers</em>";
              header("Location: sign-up.php");  
         }
         else
         if((strlen($AdminPassword) < 8)){
              $_SESSION['signUp'] = "Password must contain at least 8 characters";
              header("Location: sign-up.php");  
         }
         else
         if(!$uppercase){
              $_SESSION['signUp'] = "Password must contain capital letters";
              header("Location: sign-up.php");
         }
         else
         if(!$lowercase){
              $_SESSION['signUp'] = "Password must contain small letters";
              header("Location: sign-up.php");
         }
         else
         if(!$number){
              $_SESSION['signUp'] = "Password must contain numbers";
              header("Location: sign-up.php");
         }
       
            else{
         

             $sql = "SELECT * FROM manager";
             //$hashed_password = password_hash($userPassword, PASSWORD_DEFAULT);
             #save to DB
             $query="INSERT INTO manager (first_name, last_name, email, phone ,password) VALUES('$AdminFN','$AdminLN','$AdminEmail','$AdminPhone','$AdminPassword')";
             $result = (mysqli_query( $connection, $query));
             $_SESSION['entered']='entered';
             $_SESSION['name']="".$AdminFN." ".$AdminLN;
             header("Location: AdminHome.php");
            }
         }
         
         else if(empty($AdminFN)||empty($AdminLN)||empty($AdminEmail)||empty($AdminPhone)||empty($AdminPassword)){
             $_SESSION['signUp'] = "Please fill out the form";
             header("Location: sign-up.php");
         }
        
    }

?>

<?php

 
    if ( !include('connection.php')) {
        echo "<p> Couldn't connect to database</p>";
    }
    else{
         session_start();
         
         $AdminEmail= $_POST['email'];
         $AdminPassword= $_POST['password'];
         
         $uppercase = preg_match('@[A-Z]@', $AdminPassword);
         $lowercase = preg_match('@[a-z]@', $AdminPassword);
         $number    = preg_match('@[0-9]@', $AdminPassword);
         $specialChars = preg_match('@[^\w]@', $AdminPassword);
   
        if(!empty($AdminEmail)&&!empty($AdminPassword)){

         if (!filter_var($AdminEmail, FILTER_VALIDATE_EMAIL)){
             $_SESSION['logIn'] = "Invalid email format";
              header("Location: log in.php");
         }
         else
         if((strlen($AdminPassword) < 8)){
              $_SESSION['logIn'] = "Password must contain at least 8 characters";
              header("Location: log in.php");
         }
         else
         if(!$uppercase){
              $_SESSION['logIn'] = "Password must contain capital letters";
              header("Location: log in.php");
         }
         else
         if(!$lowercase){
              $_SESSION['logIn'] = "Password must contain small letters";
              header("Location: log in.php");
         }
         else
         if(!$number){
              $_SESSION['logIn'] = "Password must contain numbers";
              header("Location: log in.php");
         }
       
            else{
         

             $sql = 'SELECT * FROM manager WHERE email="'.$AdminEmail.'"';
             $query = mysqli_query($connection, $sql);
                while($row = mysqli_fetch_assoc($query)){
                      $email = true; 
                      $rowPass = $row['password'];
                      if($rowPass == $AdminPassword){
                             $_SESSION['entered']='entered';
                             $_SESSION['name']="".$row['first_name']." ".$row['last_name']."";
                             header("Location: AdminHome.php");
                      }
                }
                if($email != true){
                   $_SESSION['logIn']  = "email not registered";
                   header("Location: log in.php");
                }
                else
                if(!isset($_SESSION['entered'])){
                    $_SESSION['logIn']  = "Password incorrect";
                    header("Location: log in.php");
                }
            }
        }

         else if(empty($AdminEmail)||empty($AdminPassword)){
             $_SESSION['logIn'] = "Please fill out the form";
             header("Location: log in.php");
         }
        
    }

?>

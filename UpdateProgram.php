
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
   <title>Update Program</title>
    <script src="js/add.js"></script>
	  <script type="text/javascript" src="script.js"></script>
          <script type="text/javascript" src="js/add.js"></script>
	   <script src="https://kit.fontawesome.com/ff4e223e2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
	  
   
</head>


<body>
 <?php
 include('connection.php');
    
         $Pid= $_GET['id'];
 ?>
  <header>
  <img class="attach" id="logopic" src="images/logo.png" alt="logo" width="20%" > 
 
    <h3>Sticky Header Pow!</h3>
	
     
	
    <nav>
  <a href="AdminHome.php">Home</a>
  <a href="LogOut.php"> Log-out</a>
      
    </nav>
  </header>
  
   <main>
  <div class="wrapper">
  
    <section id='steezy'>
	  <?php
	  echo'<form id="myForm" action="UpdatePFunction.php?id='.$Pid.'"'.' method="post" enctype="multipart/form-data" >'; ?>
            <fieldset>
                <legend> Update Program </legend>
                <?php
                 $msg = $_SESSION['incorrect'];
                if(isset($_SESSION['incorrect'])){
                        echo "<span>".$msg."</span>";
                    }
			    unset( $_SESSION['incorrect']);
                            echo '</br>';
                     ?>
                
				</br>
		 <label>Select major for the program:</label>
                 	  
                     
              <?php
              $sql = "SELECT * from program WHERE id=$Pid";
                $result = mysqli_query($connection, $sql);
             while ($row = mysqli_fetch_assoc($result)) {
                         $major=$row['major'];  
                 if ($major =='swe')
		echo '<select  name ="major" class="info" id="majors2">
            <option value=" "></option>
            <option value="swe" selected="selected">Software Engineering</option>
            <option value="it">Information Technology</option>
            <option value="cs">Computer Science</option>
            <option value="is">Information Systems</option>
            <option value="ds">IT - Data Science</option>
            <option value="cys">IT - Cyber Security </option>
            <option value="iot">IT - Internet Of Things</option>
              </select> ';
                 
                 else if($major=='it') 
                 echo '<select name ="major" class="info" id="majors2">
            <option value=" "></option>
            <option value="swe" >Software Engineering</option>
            <option value="it" selected="selected">Information Technology</option>
            <option value="cs">Computer Science</option>
            <option value="is">Information Systems</option>
            <option value="ds">IT - Data Science</option>
            <option value="cys">IT - Cyber Security </option>
            <option value="iot">IT - Internet Of Things</option>
              </select> ';
                 else if($major=='cs')
              echo '<select name ="major" class="info" id="majors2">
            <option value=" "></option>
            <option value="swe" >Software Engineering</option>
            <option value="it" >Information Technology</option>
            <option value="cs" selected="selected">Computer Science</option>
            <option value="is">Information Systems</option>
            <option value="ds">IT - Data Science</option>
            <option value="cys">IT - Cyber Security </option>
            <option value="iot">IT - Internet Of Things</option>
              </select> ';
                 
                 else if($major=='is')
             echo '<select name ="major" class="info" id="majors2">
            <option value=" "></option>
            <option value="swe" >Software Engineering</option>
            <option value="it" >Information Technology</option>
            <option value="cs" >Computer Science</option>
            <option value="is" selected="selected">Information Systems</option>
            <option value="ds">IT - Data Science</option>
            <option value="cys">IT - Cyber Security </option>
            <option value="iot">IT - Internet Of Things</option>
              </select> ';
                 
                 else if($major=='ds')
             echo '<select name ="major" class="info" id="majors2">
            <option value=" "></option>
            <option value="swe" >Software Engineering</option>
            <option value="it" >Information Technology</option>
            <option value="cs" >Computer Science</option>
            <option value="is" >Information Systems</option>
            <option value="ds" selected="selected" >IT - Data Science</option>
            <option value="cys">IT - Cyber Security </option>
            <option value="iot">IT - Internet Of Things</option>
              </select> ';
                 
                  else if($major=='cys')
             echo '<select name ="major" class="info" id="majors2">
            <option value=" "></option>
            <option value="swe" >Software Engineering</option>
            <option value="it" >Information Technology</option>
            <option value="cs" >Computer Science</option>
            <option value="is" >Information Systems</option>
            <option value="ds"  >IT - Data Science</option>
            <option value="cys" selected="selected" >IT - Cyber Security </option>
            <option value="iot">IT - Internet Of Things</option>
              </select> ';
                  
                   else if($major=='iot')
             echo '<select name ="major" class="info" id="majors2">
            <option value=" "></option>
            <option value="swe" >Software Engineering</option>
            <option value="it" >Information Technology</option>
            <option value="cs" >Computer Science</option>
            <option value="is" >Information Systems</option>
            <option value="ds" >IT - Data Science</option>
            <option value="cys">IT - Cyber Security </option>
            <option value="iot"  selected="selected" >IT - Internet Of Things</option>
              </select> ';
                   
                   
                 }
                 
                 
                 ?>
		 </br></br>
                 <label>Program Name:</label>
                
                  <?php
                       $sql = "SELECT * from program WHERE id=$Pid";
                        $result = mysqli_query($connection, $sql);
             while ($row = mysqli_fetch_assoc($result)) {
             echo '<input class="info" type="text" name="programName" value="'.$row['program_name'].'">' ; }
               
             ?>
 
                 </br></br>
		 <label>Description:</label>
		 </br>
		 </br>
		<?php
                    $sql = "SELECT * from program WHERE id=$Pid";
                   $result = mysqli_query($connection, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                   echo '<textarea class="info" name="Description" rows="6" cols="40">'.$row['description'].'</textarea>' ; }
                  ?>
		  </br></br>
		 <label>Change photo:</label>
		 </br>
                 </br> 
                 <input  class="file" type="file" name="file" id="img">
                  <?php
                $sql = "SELECT * from program WHERE id=$Pid";
                $result = mysqli_query($connection, $sql);
               while ($row = mysqli_fetch_assoc($result)) {
              if (isset($row['photo'])){
            echo '<br>';
            echo '<h6>previous photo :';
            if (!empty($row['photo'])){
                echo "</br><a href='".$row['photo']."'>".$row['photo']."</a></br>";   }
                else {}
                 echo '</h6>';
        }
       
                }
             ?>
		 </br></br>
                 <button class="submit" type="submit" id="submit" onclick="">Submit</button>
				 <input  class="submit" type="button" id=" Cancel" value="Cancel" onclick="Cancel()">
				 </br>
				 </br>
				 </br>
            </fieldset>
        </form>
    </section>


   
  </div>
  <div class="page-wrapper">
    <div id="waterdrop"></div>
    <footer>
      <div class="footer-top">
        <div class="pt-exebar">

        </div> 
      <div class="footer-bottom">
        <div class="container">
          <div class="row">

            <div class="col-md-3">
              <div class="footer-site-info">2022 © Design team|All rights reserved</div>
			   <br>
			  <div class="footer-site-info">Don't be shy to say hi</div>
            </div>

            <div class="col-md-6">
              <nav id="footer-navigation" class="site-navigation footer-navigation centered-box" role="navigation">
			  
			    <br>
	   <ul class="rightlist">	  
	    <li class="phone">  <i class="fas fa-phone-square-alt"></i> +966542918273</li>  
		 
               
		
	  </ul>
       <ul class="leftlist">
	   <li class=" email"><i class="fas fa-envelope"></i> SRE.x@gmail.com</li>  
	     
		
      </ul>
	  <br>
               
              </nav>
            </div>

            <div class="col-md-3">
              <div id="footer-socials">
                <div class="socials inline-inside socials-colored">

                  <a href="#" target="_blank" title="Facebook" class="socials-item">
                    <i class="fab fa-facebook-f facebook"></i>
                  </a>
                  <a href="#" target="_blank" title="Twitter" class="socials-item">
                    <i class="fab fa-twitter twitter"></i>

                  </a>
                  <a href="#" target="_blank" title="Instagram" class="socials-item">
                    <i class="fab fa-instagram instagram"></i>
                  </a>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

 <script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>

    <script src="js/index.js"></script>


</html>

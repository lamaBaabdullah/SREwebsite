
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
        <title>ReviewPage</title>
		
       
	  <script type="text/javascript" src="script.js"></script>
	   <script src="https://kit.fontawesome.com/ff4e223e2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
	  
   
</head>


<body>
   
 <?php
 
    
    $connection = mysqli_connect("localhost", "root", "root", "SRE-4");
    $error = mysqli_connect_error();
    session_start();
    if ($error != null) {
        echo "<p> Couldn't connect to database</p>";
    }
    
    
$ElectronicName=$_GET['name'];
$ElectronicId=$_GET['id'];



?>
  <header>
  <img class="attach" id="logopic" src="images/logo.png" alt="logo" width="20%" > 
 
    <h3>Sticky Header Pow!</h3>
	
     
	
 <nav>
<?php
session_start();
        if(!isset($_SESSION['entered'])){
            echo '<a href="index.php">Home</a>';
            echo '<a href="#real">Categories</a>';
            echo '<a href="log in.php">Admin log-in</a>';
	    echo '<a href="sign-up.php">New admin? sign-up</a>';
        }
        
        else{
            echo '<a href="AdminHome.php">Home</a>';
            echo '<a href="LogOut.php"> Log-out</a>';
        }
?>
</nav>
  </header>
  
   <main>
  <div class="wrapper">
  
    <section id='steezy'>
	

 
<div>
<?php    
echo "<h2>".$ElectronicName."</h2>";
?>
<br>
<?php
$sql ="SELECT * FROM device WHERE id=$ElectronicId";
$result = mysqli_query($connection, $sql);
$which = "a";

while($row = mysqli_fetch_assoc($result)){
  if($row['device_name']== $ElectronicName){ 
     $which = "D" ;
    echo '<img id="revimg" src="'.$row['photo'].'" alt="" width="100" height="100">' ; 
    echo "<br><br>";
    echo '<p id="discription">'.$row['description'].'</p>';
    echo "<br><br> <h4>[Reviews]</h4><br></div><div> ";
    
$sql3 = "SELECT * FROM DeviceReviews WHERE device_id= $ElectronicId ";
$result3 = mysqli_query($connection, $sql3);

while($row3 = mysqli_fetch_assoc($result3))
   {
echo '<p id ="Reviews">'.$row3['review'].'</p><br>';
 }
   
}

   }
   
   
   
 $sql2 = "SELECT * FROM program WHERE id=$ElectronicId";
 $result2 = mysqli_query($connection, $sql2);
 
 
   while($row2 = mysqli_fetch_assoc($result2)){
       if($row2['program_name']== $ElectronicName){
           $which = "P" ;
    echo '<img id="revimg" src="'.$row2['photo'].'" alt="" width="100" height="100">' ; 
    echo "<br><br>";
    echo '<p id="discription">'.$row2['description'].'</p>';
    echo "<br><br> <h4>[Reviews]</h4><br></div><div> ";
$sql4 = "SELECT * FROM ProgramReviews WHERE program_id=$ElectronicId";
$result4 = mysqli_query($connection, $sql4);

while($row4 = mysqli_fetch_assoc($result4))
   {
echo '<p id ="Reviews">'.$row4['review'].'</p><br>';
 }
    }
   }

 
 
 

 
 
 ?>
   
</div>
        <?php
        if(!isset($_SESSION['entered'])){
       echo '<a id ="addrev" href="addReview.php?category='.$which.'&Id='.$ElectronicId.'&name='.$ElectronicName.'">Add review</a>';
        }
?>
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


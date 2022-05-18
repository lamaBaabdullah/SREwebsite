
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
    <title>ProgramsPage</title>
       
	  <script type="text/javascript" src="script.js"></script>
	   <script src="https://kit.fontawesome.com/ff4e223e2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
	 <script src="javaS.js">  </script>
	  
   
</head>


<body>
  
    <?php
    
    $connection = mysqli_connect("localhost", "root", "root", "SRE-4");
    $error = mysqli_connect_error();

    if ($error != null) {
        echo "<p> Couldn't connect to database</p>";
    }
    
    ?>
  <header>
  <img class="attach" id="logopic" src="images/logo.png" alt="logo" width="20%" > 
 
    <h3>Sticky Header Pow!</h3>
	
     
	
    <nav>
     <a href="index.html">Home</a>
      <a href="log in.php">Admin log-in</a>
	   <a href="sign-up.php">New admin? sgin-up</a>
      
    </nav>
  </header>
  
   <main>
  <div class="wrapper">
  
    <section id='steezy'>
	

        <div id="wrapper">
    <div id="gallery" class="clearfix">
        
         <?php 
  $sql = "SELECT * FROM program";
  $result = mysqli_query($connection, $sql);
             
   while($row = mysqli_fetch_assoc($result))
   {
      echo "<figure>";
      echo '<img id="revimg" src="'.$row['photo'].'"  alt="tree sketching">'  ; 
      echo "<figcaption>";
      echo $row['program_name'].'(<a href="reviews.php?id='.$row['id'].'&name='.$row['program_name'].'" target="_blank">see more..</a>)';
      echo "</figcaption>";
      echo "</figure>";
   }   
          
          ?>
        
     
	  
    </div> <!-- end img gallery wrapper -->
  </div> <!-- end content wrapper -->
        
            
    </section>
	
	  <section id='real'>
              
	  <h4> Do you want to have programs recommendations ?</h4>
          <form method="post">
        <label for="major">Choose Your Major to display recommendations:</label>

            <select id="majors" name="majorr">
               <option value=" "></option>
               <option value="Software Engineering">Software Engineering</option>
               <option value="Information Technology">Information Technology</option>
               <option value="Computer Science">Computer Science</option>
               <option value="Information Systems">Information Systems</option>
               <option value="Data Science">IT - Data Science</option>
               <option value="Cyber Security">IT - Cyber Security </option>
               <option value="Internet Of Things">IT - Internet Of Things</option>
            </select>
        <input type="submit" value="Submit">
	</form>		
          </br>
			</br>
			</br>
                        
<?php
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=="POST")
  {
$selectOption = $_POST['majorr'];

$sql2 = "SELECT * FROM program";
$result2 = mysqli_query($connection, $sql2);
   echo "<table>" ;         
   while($row2 = mysqli_fetch_assoc($result2))
   {
       if ($row2['major'] == $selectOption){
           echo '<tr><td id="displayRecommend"><img src="'.$row2['photo'].'" hight="200" width="200"><br><a href="reviews.php?id='.$row2['id'].'&name='.$row2['program_name'].'">'.$row2['program_name'].'</a></td></tr>';
           
       }
       
   }
    echo "</table>";
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


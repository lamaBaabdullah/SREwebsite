
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
     <script src="js/add.js"></script>
        <title>Add Review</title>
	  <script type="text/javascript" src="script.js"></script>
          	  <script type="text/javascript" src="js/add.js"></script>
	   <script src="https://kit.fontawesome.com/ff4e223e2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .submit {
                float:left;
                margin-right:5px;
}</style>
</head>


<body>
    
     <?php
      session_start();
        include('connection.php');
    
         $itemId= $_GET['Id'];
          $itemType= $_GET['category'];
          $ElectronicName=$_GET['name'];

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
	  echo'<form id="myForm" action="addReview_function.php?category='.$itemType.'&Id='.$itemId.'"'.' method="post"  >'; ?>
        
           <fieldset> 
              <legend> New Review</legend>
                <?php
                  
                 $msg = $_SESSION['incorrect'];
                if(isset($_SESSION['incorrect'])){
                        echo "<span>".$msg."</span>";
                       
                    }
			    unset( $_SESSION['incorrect']);
                            echo '</br>';
                     ?>
                
				
				  </br>
                
		 <label>Add your review here:</label>
		  </br>
		 
		 </br>
		 <textarea  class="info" name="textarea" rows="6" cols="40"></textarea>
		  </br></br>

              
                  <input class="submit" id="submit" type="submit" value="Submit">
                      <?php echo "</form>";?>

              <?php
	  echo'<form id="myForm" action="reviews.php?name='.$ElectronicName.'&id='.$itemId.'" method="post"  >'; ?>
                <input class="submit" id="Cancel" type="submit" value="Cancel">	           </fieldset>
    <?php echo "</form>";?>

               
            
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



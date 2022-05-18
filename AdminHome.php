<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>Admin home page</title>
      
	  <script type="text/javascript" src="script.js"></script>
	   <script src="https://kit.fontawesome.com/ff4e223e2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
	 <script src="js/delete.js"></script>
		<script src="js/update.js"></script>
        <style>
            table{
                border-collapse: separate;
                border-spacing: 0 50px;
            }
            img{
                width:250px;
                height:250px;
            }
        </style>
	  
   
</head>


<body>
 
  <header>
   <img class="attach" id="logopic" src="images/logo.png" alt="logo" width="20%" > 
 <?php
         session_start();
//for manager pages
         if(!isset($_SESSION['entered'])){
              header("Location: index.php");
            }
?>
    <nav>
 <a href="AdminHome.php">Home</a>
 <a href="LogOut.php"> Log-out</a>
      
    </nav>
  </header>
  
   <main>
  <div class="wrapper">
  
   <section id='steezy'>
       
       <?php
           include('connection.php');
             echo "<h1> Welcome to SRE Admin ".$_SESSION['name']."</h1>" ;
       ?>
	  
    </section>
	</br>
  
    <section id='steezy'>
	
	
    <h4>Programs </br><input type="button" id="ADDnew" value="Add programs" ></h4>
	<script type="text/javascript">
    document.getElementById("ADDnew").onclick = function () {
        location.href = "addProgram.php";
    };
</script>
	
   <div id="wrapper">
    <div id="gallery" class="clearfix">
     <?php
         $sql = "SELECT * from program";
          $result = mysqli_query($connection, $sql);
         while ($row = mysqli_fetch_assoc($result)) {
         echo' <figure> ';
       echo '<img id="img" src="'.$row['photo'].'" alt="program img">';
       echo' <figcaption>';
         echo $row['program_name'].' (<a href="reviews.php?id='.$row['id'].'&name='.$row['program_name'].'" target="_blank">see more..</a>)';
          echo '</figcaption>';
	echo	'</br>';
         echo '<a id="update" href = "deletePfunction.php?id='.$row['id'].'"> Delete </a> &nbsp&nbsp&nbsp&nbsp'
         . '<a id="update" href="UpdateProgram.php?id='.$row['id'].'"> Update </a>';
            echo '</br>';
	      echo' </br>';
       echo '</figure> ';
         }
      ?>
    
    </div> <!-- end img gallery wrapper -->
  </div> <!-- end content wrapper -->
  
   
    </section>
	</br>
		</br>
			</br>
		
   <section id='steezy'>
	
	  <h4>Devices </br><input type="button" id="ADDnew2" value="Add devices" ></h4>
	  	<script type="text/javascript">
    document.getElementById("ADDnew2").onclick = function () {
        location.href = "addDevice.php";
    };
</script>
	
   <div id="wrapper">
    <div id="gallery" class="clearfix">

             <?php
         $sql = "SELECT * from device";
          $result = mysqli_query($connection, $sql);
         while ($row = mysqli_fetch_assoc($result)) {
         echo' <figure> ';
       echo '<img id="img" src="'.$row['photo'].'" alt="device img">';
       echo' <figcaption>';
         echo $row['device_name'].' (<a href="reviews.php?id='.$row['id'].'&name='.$row['device_name'].'" target="_blank">see more..</a>)';
          echo '</figcaption>';
	echo	'</br>';
         echo '<a id="update" href ="deleteDfunction.php?id='.$row['id'].'"> Delete </a> &nbsp&nbsp&nbsp&nbsp'
         . '<a id="update" href="UpdateDevice.php?id='.$row['id'].'"> Update </a>';
            echo '</br>';
	      echo' </br>';
       echo '</figure> ';
         }
      ?>  
    </div> <!-- end img gallery wrapper -->
  </div> <!-- end content wrapper -->
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

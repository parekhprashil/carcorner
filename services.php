<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Car Corner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Car<span>Corner</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item active"><a href="services.php" class="nav-link">Companys</a></li>
	          <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li> -->
	          <!-- <li class="nav-item"><a href="car.php" class="nav-link">Cars</a></li> -->
	          <!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
	        <!--  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> -->
    <?php
  include_once("header.php");
?>
    
    <!-- END nav -->
    
    <section class="hero-wrap  animated fadeOut " style="background-image: url('images/bg_3.jpg');" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Companys <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Our Companys</h1>
          </div>
        </div>
      </div>
    </section>
     

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Companys</span>
            <h2 class="mb-3">Our Latest Companys</h2>
          </div>
        </div>
        
       
				<div class="row">
          <?php
              include_once("configur.php");
              $qur="SELECT * FROM category";
              $res=mysqli_query($conn,$qur);
              while($row= mysqli_fetch_assoc($res))
              {
            ?>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<!-- <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div> --><a href="category.php?categoryid=<?php echo($row['Category_ID']); ?>" style="color:Black;">
              <img src="<?php echo($row['logo_path'])?>" style="width:100px;height: 100px">
            	<div class="text w-100"><?php echo($row['Category_Name'])?>
                <h3 class="heading mb-2"></a></h3>
                 
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
              </div>
            </div>
            
					</div >
           <?php
          }
          ?>       
        
        
					
          

				</div>
           
                  
        			</div>
       
        

      
			</div>
		</section>



		
		<!-- <section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
            <a href="#" class="btn btn-primary btn-lg">Become A Driver</a>
          </div>
				</div>
			</div>
		</section> -->

   <?php
    include_once("fotter.php");
   ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
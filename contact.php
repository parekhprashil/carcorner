<?php
  include_once("header.php");
?>
    <!-- END nav -->
    
    <section class="hero-wrap  animated fadeOut" style="background-image: url('images/contact.jpg');" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p> -->
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <!-- <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			             <p><span>Address:</span> Darshan Institute of eng & tech hadala </p> -->
			          <!-- </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div> -->
			            <!-- <p><span>Phone:</span> <a href="tel://1234567920">+91 9824481435</a></p> -->
			          </div>
		          <!-- </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span> -->
			          	</div>
			            <!-- <p><span>Email:</span> <a href="mailto:info@yoursite.com">darshan@ac.in</a></p> -->
			          <!-- </div>
		          </div>
		        </div>
          </div> --> 
          <center>
          <div class="col-md-8 block-9 mb-md-5">
            <form action="addcontact.php" class="bg-light p-5 contact-form" method="POST">
              <div class="form-group">
                <h3> Contact Here</h3>
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="sub">
              </div>
              <div class="form-group">
                <textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Message" ></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
</center>
          
          </div>
        </div>
        <!-- <div class="row justify-content-center">
        	 <div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div> -->
        </div>
      </div>
    </section>
	

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
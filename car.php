<?php
  include_once("header.php");
?>
    <!-- END nav -->
    
    <section class="hero-wrap  animated fadeOut" style="background-image: url('images/bg_3.jpg');" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>BMW <i class="ion-ios-arrow-forward"></i></span></p> -->
            <h1 class="mb-3 bread">All Car</h1>
          </div>
        </div>
      </div>
    </section>
  
    
    

    <section class="ftco-section bg-light">

      <div class="container">
        <div class="row">
          <?php
              include_once("configur.php");
                            $qur="SELECT * FROM car_data";
              $res=mysqli_query($conn,$qur);
              while($row= mysqli_fetch_assoc($res))
              {
            ?>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end">
                <img src="<?php echo($row['car_image_path']);?>" style="height: 185px;">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php"><?php echo($row['Car_Name']);?></a></h2>
                <div class="d-flex mb-3">
                  <!-- <span class="cat">Cheverolet</span> -->
                  <p class="price ml-auto"><?php echo($row['Price']);?></p>
                </div>
                <div class="d-flex justify-content-center mb-3">
                <a href="car-single.php?carid=<?php echo ($row['Car_ID'])  ?>&categoryid=<?php echo ($row['Category_ID']) ?>" class="btn btn-secondary py-2 px-5">Details</a>
              </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
          <!-- <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-2.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Range Rover</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Subaru</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-3.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-4.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-5.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Range Rover</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Subaru</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-6.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-7.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-8.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Range Rover</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Subaru</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-9.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-10.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-11.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Range Rover</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Subaru</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-12.jpg);">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="car-single.php">Mercedes Grand Sedan</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">Cheverolet</span>
                  <p class="price ml-auto">$500 <span>/day</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                 <li><a href="#">&lt;</a></li> -->
                <!-- <li class="active"><span>1</span></li> -->
                <!-- <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li> -->
              <!-- </ul>
            </div>
          </div>
        </div>
      </div>  -->
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
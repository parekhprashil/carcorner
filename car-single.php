<?php
include_once("header.php");

include_once("configur.php");
$qur = ("SELECT * FROM car_data where car_id=" . $_GET['carid'])or die(mysqli_error($conn));
$res = mysqli_query($conn, $qur);
$row = mysqli_fetch_assoc($res)



?>
<!-- END nav -->

<section class="hero-wrap  animated fadeOut" style="background-image: url('images/bg_3.jpg');" >
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread"><?php echo $row['Car_Name']; ?></h1>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-car-details">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="car-details">
					<div class="img rounded">
						<img src="<?php echo $row['car_image_path']; ?>" style="height:600px">
					</div>
					<div class="text text-center">
						<!-- <span class="subheading">Cheverolet</span> -->
						<!-- <h2>Mercedes Grand Sedan</h2> -->
						<h2><?php echo $row['Car_Name']; ?></h2>

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services">
					<div class="media-body py-md-4">
						<div class="d-flex mb-3 align-items-center">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
							<div class="text">
								<h3 class="heading mb-0 pl-3">
									Mileage
									<span><?php echo $row['car_mileage']; ?></span>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services">
					<div class="media-body py-md-4">
						<div class="d-flex mb-3 align-items-center">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
							<div class="text">
								<h3 class="heading mb-0 pl-3">
									Transmission
									<span><?php echo $row['car_transmision']; ?></span>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services">
					<div class="media-body py-md-4">
						<div class="d-flex mb-3 align-items-center">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
							<div class="text">
								<h3 class="heading mb-0 pl-3">
									Seats
									<span><?php echo $row['car_seats']; ?></span>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services">
					<div class="media-body py-md-4">
						<div class="d-flex mb-3 align-items-center">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
							<div class="text">
								<h3 class="heading mb-0 pl-3">
									Luggage
									<span><?php echo $row['car_luggage']; ?></span>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services">
					<div class="media-body py-md-4">
						<div class="d-flex mb-3 align-items-center">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
							<div class="text">
								<h3 class="heading mb-0 pl-3">
									Fuel
									<span><?php echo $row['car_fuel']; ?></span>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 pills">
				<div class="bd-example bd-example-tabs">
					<div class="d-flex justify-content-center">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							<li class="nav-item">
								<a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							</li>


						</ul>
					</div>
					<?php
					$qur = "SELECT * FROM features where car_id=" . $_GET['carid'];
					$resfe = mysqli_query($conn, $qur);
					$rowfe = mysqli_fetch_assoc($resfe);
					?>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
							<div class="row">
								<div class="col-md-4">
									<ul class="features">
										<li class="<?php if($rowfe['airconditions'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['airconditions'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Airconditions</li>
										<li class="<?php if($rowfe['chilseat'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['chilseat'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Child Seat</li>
										<li class="<?php if($rowfe['gps'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['gps'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>GPS</li>
										<li class="<?php if($rowfe['luggage'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['luggage'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Luggage</li>
										<li class="<?php if($rowfe['Music'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['Music'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Music</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="features">
										<li class="<?php if($rowfe['seatbelt'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['seatbelt'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Seat Belt</li>
										<li class="<?php if($rowfe['sleeping_bed'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['sleeping_bed'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Sleeping Bed</li>
										<li class="<?php if($rowfe['water'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['water'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Water</li>
										<li class="<?php if($rowfe['bluetooth'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['bluetooth'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Bluetooth</li>
										<li class="<?php if($rowfe['onboard_computer'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['onboard_computer'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Onboard computer</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="features">
										<li class="<?php if($rowfe['audio_input'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['audio_input'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Audio input</li>
										<li class="<?php if($rowfe['longtermtrips'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['longtermtrips'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Long Term Trips</li>
										<li class="<?php if($rowfe['carkit'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['carkit'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Car Kit</li>
										<li class="<?php if($rowfe['remote_control_locking'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['remote_control_locking'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Remote central locking</li>
										<li class="<?php if($rowfe['climate_control'] == 1 ) {?>check <?php } else { ?>remove<?php } ?>"><span class="<?php if($rowfe['climate_control'] == 1 ) {?>ion-ios-checkmark<?php } else { ?>ion-ios-close<?php } ?>"></span>Climate control</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
							<p><?php echo $row['Car_Description']; ?></p>
						</div>

						<!-- <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
						      <div class="row">
							   		<div class="col-md-7">
							   			<h3 class="head">23 Reviews</h3>
							   			<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
									   	<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
									   	<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
							   		</div>
							   		<div class="col-md-5">
							   			<div class="rating-wrap">
								   			<h3 class="head">Give a Review</h3>
								   			<div class="wrap">
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(98%)
								   					</span>
								   					<span>20 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(85%)
								   					</span>
								   					<span>10 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(70%)
								   					</span>
								   					<span>5 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(10%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(0%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   		</div>
								   		</div>
							   		</div>
							   	</div>
						    </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<center>
	<div>
		<div>
			Contact For <?php include_once("configur.php");
					$qur = "SELECT * FROM car_data where car_id=" . $_GET['carid'];
					$res = mysqli_query($conn, $qur);
					$row = mysqli_fetch_assoc($res);
					echo $row['Car_Name']; ?>
			<div>
				Get in touch for the best buying option from your authorized dealer
			</div>
			<br>
			<!-- <p class=""><a href="#" class="btn btn-primary" style="float: center;">Get Assistance</a></p> -->
			<button style="color: White; background-color: #007bff;border-color: #007bff;;" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Assistance</button>
		</div>
	</div>
	</div>
	<script>
		var myModal = document.getElementById('myModal')
		var myInput = document.getElementById('myInput')

		myModal.addEventListener('shown.bs.modal', function() {
			myInput.focus()
		})
	</script>
	</div>
	</div>
</center>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"  style="background:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.6)),
url(<?php echo $row['car_image_path']; ?>)no-repeat center; filter: opecity(80%); color: white;">
      <div class="modal-header">
        <h5 class="modal-title popupInputFields" id="exampleModalLabel"><?php include_once("configur.php");
					$qur = "SELECT * FROM car_data where car_id=" . $_GET['carid'];
					$res = mysqli_query($conn, $qur);
					$row = mysqli_fetch_assoc($res);
					$carid = $_GET['carid'];
					$catid = $_GET['categoryid'];
					echo $row['Car_Name']; ?></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="addassistance.php?carid=<?php echo $carid; ?>&categoryid=<?php echo $catid; ?>" method="POST">
			<table class="d-flex justify-content-center">
			<input type="hidden" name="id" value="<?php echo($_GET['carid']);?>">
				<tr>
				<td><label>Email</label></td>
				<td>:</td>
				<td><input type="email" placeholder="Enter Email" name="email" class="bg-transparent border border-white popupInputFields" required></td>
			</tr>
			<tr>
				<td><label>Full Name </label></td>
				<td>:</td>
				<td><input type="text" placeholder="Enter Name" name="name" class="bg-transparent border border-white popupInputFields" required></td>
			</tr>
			<tr>
				<td><label>Contact Number </label></td>
				<td>:</td>
				<td><input type="number" pattern="[0-9]{10}" onkeypress="return event.charCode>=48 && event.charCode<=57" maxlength="10" id="validationCustom01" class="bg-transparent border border-white popupInputFields" name="fcontact" required></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" class="btn btn-light mt-3">
				</tr>
			</table>
		</form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button"  class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<br />
<br />
<!-- <input type="text" pattern="[0-9]{10}" onkeypress="return event.charCode>=48 && event.charCode<=57" maxlength="10" id="validationCustom01" class="bg-transparent border border-white popupInputFields" name="fcontact" required> -->
<script>
	var e = document.getElementById("cn").value;
	var cn = /^\d{10}$/;
		if (e.match(cn))
		{

		}
		else
		{
				alert("Enter Valid Contact Number");
		}
</script>

<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<span class="subheading">Choose Car</span>
				<h2 class="mb-2">Related Cars</h2>
			</div>
		</div>
		<div class="row">
			<?php
			include_once("configur.php");
			$qur = "SELECT * FROM car_data where Category_ID=" . $_GET['categoryid'];
			$res = mysqli_query($conn, $qur);
			while ($row = mysqli_fetch_assoc($res)) {
			?>
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end">
							<img src="<?php echo ($row['car_image_path']); ?>" style="height: 185px;">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="<?php echo ($row['car_page_path']); ?>"><?php echo ($row['Car_Name']); ?></a></h2>
							<div class="d-flex mb-3">
								<!-- <span class="cat">Cheverolet</span> -->
								<p class="price ml-auto"><?php echo ($row['Price']); ?></p>
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


		</div>
	</div>
</section>


<?php
include_once("fotter.php");
?>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>


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
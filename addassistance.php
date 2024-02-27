<?php
	include_once("configur.php");

	extract($_POST);
    $carid = $_GET['carid'];
    $catid = $_GET['categoryid'];
	$sql="INSERT INTO assistance(car_id, Email, Full_Name, Contact_Number,status) VALUES ('$id','$email','$name','$fcontact','pending')"; 
	 //echo $sql;

	  mysqli_query($conn, $sql);

	  header("Location: car-single.php?carid=$carid&categoryid=$catid");
	?>
<?php
	include_once("configur.php");

	extract($_POST);

	$sql="INSERT INTO contact_us (Name, Email,Subject,Message) VALUES ('$name', '$email','$sub','$msg')"; 
	// echo $sql;

	  mysqli_query($conn, $sql);

	 header("Location: contact.php");
?>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$pet = $_POST['pet'];
	$uid = $_POST['uid'];

	//database connection
	$conn = new mysqli('localhost','root','','adoption');
	if($conn->connect_error){
		die('Connection Failed:'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into adoption(name, email, contact, address, pet, uid)values(?,?,?,?,?,?)");
		$stmt->bind_param("ssissi",$name, $email, $contact, $address, $pet, $uid);
		$stmt->execute();
		header("location:homepage.php");
		$stmt->close();
		$conn->close();


	}




?>
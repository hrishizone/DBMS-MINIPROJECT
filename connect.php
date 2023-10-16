<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$donor = $_POST['donor'];
	$amount = $_POST['amount'];

	//database connection
	$conn = new mysqli('localhost','root','','donation');
	if($conn->connect_error){
		die('Connection Failed:'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into donation(name, email, contact, address, donor, amount)values(?,?,?,?,?,?)");
		$stmt->bind_param("ssissi",$name, $email, $contact, $address, $donor, $amount);
		$stmt->execute();
		Echo "<a href=#>Click here to redirect to Payment Portal</a>";
		$stmt->close();
		$conn->close();


	}




?>
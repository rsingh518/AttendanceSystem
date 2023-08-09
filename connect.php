<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

    $imagename = $_FILES['file']['name'];
    $tempimgname = $_FILES['file']['tmp_name'];



	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        move_uploaded_file($tempimgname, "images/$imagename");
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number, images) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssis", $firstName, $lastName, $gender, $email, $password, $number, $imagename);
		$stmt->execute();
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
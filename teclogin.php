<?php

session_start();

$subCode = $_POST['subCode'];
// $subName = $_POST['subName'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli("localhost","root","","test");
if($conn->connect_error){
    // echo "$conn->connect_error";
    die("Failed to connect : ".$conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from teacherlogin  where email = ? AND subCode = ?  ");
    $stmt->bind_param("ss", $email, $subCode);
    $stmt->execute();
    
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows >0){
        $data = $stmt_result->fetch_assoc();
        if($data['password']===$password){
            $_SESSION['emailid'] = $email;
            header('location:AfTeaLogin.php');
            die;
        }
    }else{
        echo "<h2>Invalid Email Or Password</h2>";
    }
}
?>
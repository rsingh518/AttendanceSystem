<?php

session_start();

if($_SESSION['emailid']){
    
}
else{
    header("location:login.html");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <style>
        .btn,.btn2,.btn3{
            background-color: blanchedalmond;
            padding: 15px;
            border: none;
            cursor: pointer;
            font-size: 15px;
            border-radius: 4px;
        }
        .btn3{
            margin: 5px;
        }
        .btn:hover,.btn2:hover,.btn3:hover{
            color: rgb(165, 105, 14);
            background-color: rgb(55, 55, 179);
        }
        .square{
            width:300px;
            padding:30px;
            position: absolute;
            top:50%; 
            left: 50%;
            transform: translate(-50%, -50%);
            background:rgba(0,0,0,0.4); 
            text-align:center;
        }
        .topnav .logout-container {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            
            font-size: 17px;
            border: none;
            /* cursor: pointer;    */
        }
    </style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="login.html">Home</a>
        <a href="teacher.html">Teacher Login</a>
        <a href="Contact.html">Contact</a>
        

        <div class="logout-container">
            <img src="logout.png" alt="Avatar" style="width: 40px;">
            <a href="stulogout.php"><button >Logout</button></a>
        </div>
    </div>

    <div class="square">
        <img src="StuProfile.jpg" alt="Avatar" style="width:200px">

        <h4>Welcome user <?php echo $_SESSION['emailid']?></h4>
        <h5>You can download today attandence by click on below button..</h5>

        <a target="_blank" href="Attendance.csv"><button class="btn3"> Download Attendence</button></a>
        
    </div>
    

    
    
</body>
</html>
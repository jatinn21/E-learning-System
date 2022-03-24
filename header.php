<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // include('header.php');
    // include('../adminDbConnection.php');

// ADMIN SESSION
// fOR SECURITY PURPOSE WE WILL USE SESSION HERE

    // if(isset($_SESSION['is_admin_login'])){
    //         $adminEmail = $_SESSION['admin_email'];
    //     }
    //     else{
    //       echo "<script> loaction.href='..index.php' </script>";
    //     }
// include('header.php');
    // include('../adminDbConnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font-Awesome Css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Custom CSS  -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="'https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admindashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

    <title>Admin Dashboard</title>

    
</head>

<body style="background-color: rgb(255, 255, 255);position: relative;">
    <div>
        <nav class="container" style="height:60px;max-width:200vh">
            <h1>Apna College <img src="dashimage/weblogo.png" alt="logo"
                    style="height:35px;width:38px;padding:5px 2px 2px 2px;">
                <small style="font-size:17px;font-weight:bold;margin-left:15px;">
                    Admin Area</small>
            </h1>
        </nav>
    </div>
    <div class="itembody">
  
        <div class="navitems" style="height: 788px !important; ">

            <div class="item" id="course" style="  background-color: rgba(33, 141, 160, 0.692);
            ">
                <a href="course.php"><img src="dashimage/admin_course.png"
                        style="height: 70px;width: 64px ;padding-top:1px;margin-top: 1px;" alt="course">&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&emsp13;&nbsp;Course</a>
            </div>



            <div class="item" id="lesson" style="  background-color: rgba(33, 141, 160, 0.692);
            ">
                <a href="lesson.php"><img src="dashimage/lesson.png"
                        style="height: 70px;width: 64px ;padding-top:1px;margin-top: 1px;" alt="lesson">&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;Lesson</a>

            </div>

            <div class="item" id="student">
                <a href="student.php"> <img src="dashimage/student.png" alt="student"
                        style="height: 70px;width: 64px ;padding-top:1px;margin-top: 1px;">&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    Student</a>

            </div>
            <div class="item" id="feedback" style="  background-color: rgba(33, 141, 160, 0.692);
            ">
                <a href="feedback.php"><img src="dashimage/feedback.png"
                        style="height: 70px;width: 64px ;padding-top:1px;margin-top: 1px;" alt="feedback">&nbsp;
                    &nbsp;&nbsp; &nbsp;&emsp13;&nbsp;Feedback</a>


            </div>

            <div class="item" id="payment">
                <a href=""><img src="dashimage/payment_status.png" alt="payment_status"
                        style="padding-top:5px;height: 70px;width: 64px ; border-radius:35% ;">&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Payment
                </a>


            </div>
            <div class="item" id="sell" style="  background-color: rgba(33, 141, 160, 0.692);
            ">
                <a href=""><img src="dashimage/report.png" alt="sells_report"
                        style="height: 70px;width: 64px ;padding-top:1px;margin-top: 1px;">&nbsp;
                    &emsp13;&emsp13;&emsp13;&emsp13; Report</a>


            </div>
            <div class="item" id="changepass">
                <a href=""><img src="dashimage/changepass.png" alt="change password"
                        style="height: 70px;width: 64px ;padding-top:1px;margin-top: 1px;"> &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;Password
                </a>
            </div>


            <div class="item" id="logout">
                <a href="../adminlogout.php"><img src="dashimage/logout2.png" style="height: 70px;width: 64px ;" alt="logout">&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Logout</a>
            </div>


            <div id="last">

            </div>

        </div>

    </div>
<!-- 
    <div class="remainbody">
    Lorem, ipsum dolor.
</div> -->
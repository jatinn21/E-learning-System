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
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <title>student logged in</title>
</head>

<body>

    <!-- start navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark h-25 "> &emsp;&emsp;&emsp;
        <a class="navbar-brand" href="index.php" style=" font-family: 'Ubuntu', sans-serif; margin-right: 23em;"> Apna
            College <img src="img/weblogo.png" alt="time"
                style="height:32px ;width :38px;padding-bottom:1px ;border-radius: 50%;">
        </a>&nbsp;
        <span class="navbar-span" style="padding-left:30px ;"></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navi" id="navbarNavAltMarkup" style="font-size: large;">
            <div class="navbar-nav"
                style="position: sticky; font-weight: bolder;display: inline-flex; justify-content:space-around;">
                <div class="navitem" style="margin-right: 1em;">
                    <a href="index.php" class="nav-link" style="margin:1px 5px;color: #dc3545;">Home</a>
                </div>
                <!-- <span style="padding-left:10px ;"></span> -->

                <div class="navitem" style="margin-right: 1em;"><a href="courses.php" class="nav-link"
                        style="margin:1px 5px;font-weight: bold;">Courses</a>
                </div>
                <!-- <span style="padding-left:10px ;"></span> -->

                <div class="navitem" style="margin-right: 1em;"> <a href="#" class="nav-link"
                        style="margin:1px 4px;font-weight: bold;">Feedback</a>


                </div>


                <div class="ego" style="color: #fdf4; font-size: 23px; padding-top: 5px;margin-right: 20px;">
                    <span>|</span>
                </div>


                            </div>
        </div>

        
<!-- video start -->
<div class="videoo" style="top:0% !important">
    <div class="vid-parent">
        <video playsinline autoplay muted loop style="margin-top:-4px">
            <source src="video/e-learning.mp4">
        </video>
        <div class="overlay" style="top:0px"></div>
    </div>
</div>
<!-- video end-->

<!-- intro start -->
<div class="intro text-center" style="margin-left:8%;margin-top:40px">
    <h1 class="introh1"> Welcome to Apna College</h1><br>
    <span class="introsmall" style="margin:1px 19px 1px 38px;">Watch-Learn-Grow-Repeat</span>

     <a href='#' id='introa' data-bs-toggle='modal' class='btn btn-danger' data-bs-target='#exampleModal'
        style='color:#fdf4f4;text-decoration:none;padding: 3px 16px;text-align: center; border-radius: 6px; '>
        Join Now</a>
</div>
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="min-width:600px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color: rgba(1, 39, 66, 0.8);font-weight:900;font-family: PT Serif, serif;
                        font-family: Ubuntu, sans-serif;">
                    Student Registration</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- SIGN UPform start -->
                <form style="background-color: rgba(255, 255, 255, 0.596) !important ;" action="index.php"
                    method="POST">
                    <div class="mb-3 ml-9 signupform"><i class="bi bi-person"></i>
                        <label for="exampleInputEmail1" class="form fw-bolder"
                            style="color: rgba(27, 59, 82, 0.8);font-weight:700"><img src="img/person.svg"
                                style=" left:6% ;top: -105%;height:22px; width:37px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Name</label>
                        <input type="text" class="form" id="name" name="name" required="required">

                    </div>
                    <br>
                    <div class="mb-1  signupform">
                        <label for="exampleInputEmail1" class="form-label"
                            style="color: rgba(27, 59, 82, 0.8);font-weight:700">
                            <img src="img/envelope.svg"
                                style=" left:8% ;top: -105%;height:22px; width:37px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Email
                        </label>
                        <input type="email" class="form"  id="email" name="email" required="required">
                        <div id="emailHelp" class="form-text" style="padding-left: 10px;">We'll never share your
                            email with anyone else.</div>
                    </div>
                    <br>
                    <div class="mb-1 signupform">
                        <label for="exampleInputPassword1" class="form-label"
                            style="color:rgba(27, 59, 82, 0.8);font-weight: 700;">
                            <img src="img/key.svg"
                                style=" left:4% ;top :-91%;height:22px; width:35px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            New Password</label>
                        <input type="password" class="form" id="password" name="password" required="required">
                    </div> <br>

                    <button type="submit" name="signup-submit" class="signupsubmit" style=" background-color: rgb(20, 72, 109);
                            width: 123px;
                            font-size: 21px;
                            user-select: auto;
                            border-radius: 10px;
                            color: white;
                            border: solid 3px rgba(20,79,122,0.8);
                            font-family:   Ubuntu, sans-serif;
                            transition: .75s;">Submit</button>

                    <!-- <button type="submit" id="signup-submit"  class="signupsubmit" data-toggle="popover" title="MESSAGE"  style=" background-color: rgb(20, 72, 109);
                            width: 123px;
                            font-size: 21px;
                            user-select: auto;
                            border-radius: 10px;
                            color: white;
                            border: solid 3px rgba(20,79,122,0.8);
                            font-family:   Ubuntu, sans-serif;
                            transition: .75s;" data-content="HIII">Click </button> -->
                    <br>

                    </span>
                </form>

                <!-- SIGN UP form end -->
            </div>

        </div>
    </div>
</div>
<!-- END OF MODAL -->

<!----------------------------------- LOGIN MODAL start ------------------------------------------------->
<div class="modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="min-width:600px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color: rgba(1, 39, 66, 0.8);font-weight:900;font-family: PT Serif, serif;
                    font-family: Ubuntu, sans-serif;">
                    Student Login </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- login form start -->
                <form style="background-color: rgba(255, 255, 255, 0.596) !important ; " method="post" action="studlogin.php">


                    <div class="mb-3 ml-9 mb-1  loginform">
                        <label for="exampleInputEmail1" class="form-label"
                            style="color: rgba(27, 59, 82, 0.8);font-weight:700">
                            <img src="img/envelope.svg"
                                style=" left:8% ;top: -105%;height:22px; width:37px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Email
                        </label>
                        <input type="email" class="form" id="login-email" name="login-email" required="required" >

                    </div>

                    <div class="mb-1 loginform">
                        <label for="exampleInputPassword1" class="form-label"
                            style="color:rgba(27, 59, 82, 0.8);font-weight: 700;">
                            <img src="img/key.svg"
                                style=" left:4% ;top :-91%;height:22px; width:35px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Password</label>
                        <input type="password" class="form" id="login-password  " name="login-password" required="required">
                    </div> <br>


                    <button type="submit" id="login-submit"  name="login-submit" class="loginsubmit" style=" background-color: rgb(20, 72, 109);
                        width: 123px;
                        font-size: 21px;
                        user-select: auto;
                        border-radius: 10px;
                        color: white;
                        border: solid 3px rgba(20,79,122,0.8);
                        font-family:   Ubuntu, sans-serif;
                        transition: .75s;">Submit</button>
                    <br>

                </form>

                <!-- login form end -->
            </div>

        </div>
    </div>
</div>
<!-- login modal end -->

<!-- admin login modal start -->
<!-- admin login modal start -->
<div class="modal" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="min-width:600px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: rgba(1, 39, 66, 0.8);font-weight:900;font-family: PT Serif, serif;
               font-family: Ubuntu, sans-serif;">
                    Admin Login </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- login form start -->
                <form style="background-color: rgba(255, 255, 255, 0.596) !important ;">


                    <div class="mb-3 ml-9 mb-1  adminform">
                        <label for="exampleInputEmail1" class="form-label"
                            style="color: rgba(27, 59, 82, 0.8);font-weight:700">
                            <img src="img/envelope.svg"
                                style=" left:8% ;top: -105%;height:22px; width:37px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Email
                        </label>
                        <input type="email" class="form" id="email">
                    </div>

                    <div class="mb-1 adminform">
                        <label for="exampleInputPassword1" class="form-label"
                            style="color:rgba(27, 59, 82, 0.8);font-weight: 700;">
                            <img src="img/key.svg"
                                style=" left:4% ;top :-91%;height:22px; width:35px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Password</label>
                        <input type="password" class="form" id="exampleInputPassword1">
                    </div>
                    <div id="emailHelp" class="form-text" style="padding-left: 10px;"> <small>*<strong>Only for
                                Admin</strong>*</div><br>

                    <button type="submit" class="adminloginsubmit" style=" background-color: rgb(20, 72, 109);
                   width: 123px;
                   font-size: 21px;
                   user-select: auto;
                   border-radius: 10px;
                   color: white;
                   border: solid 3px rgba(20,79,122,0.8);
                   font-family:   Ubuntu, sans-serif;
                   transition: .75s;">Submit</button>
                    <br>

                </form>

                <!-- adminlogin form end -->
            </div>

        </div>
    </div>
</div>


<!-- admin login modal end -->

<!-- intro end -->


<!-- headline start -->
<div class="parent" style="font-weight: 700;">
    <div class="child1" style="padding-left :100px;width: 360px;"><i class="fa-solid fa-book-open"></i>10+ Online
        Courses</div>
    <div class="child2" style="padding-left :100px;width: 360px;"><img src="img/teacher.png" alt="time"
            style="height:22px ;width :21px;padding-bottom:1px"> Expert
        Instructors</div>
    <div class="child3" style="padding-left :100px;width: 360px;"><img src="img/sand-timer.png" alt="time"
            style="height:18px ;width :20px;padding-bottom:2px"> Lifetime Access
    </div>
    <div class="child4" style="padding-left :100px;width: 360px;"><img src="img/rupee-indian.png" alt="time"
            style="height:18px ;width :20px;padding-bottom:2px"> Money Back Guarantee*
    </div>
</div>
<!-- headline end -->



<!-- -------------------------------COURSE CATEGORY START---------------------------------- -->
<div class="card body" id="cardbody">
    <h1 style="padding-bottom:5px;padding-left :40% ;padding-top: 17px;word-spacing: 8px;  font-family:  PT Serif, serif;
            font-family: Ubuntu , sans-serif; color: rgb(19, 20, 39);">Popular Courses</h1>
    <!-- popular course start -->
    <div class="container">
        <!-- starting of 1st course -->
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3 style="position: relative;">Javascript</h3>

                    <img class="content-img" src="img/js.png"
                        style=" left:1% ;top :1%;height:70px; width:100px; border-radius: 90%;position: relative;opacity: .6;margin-bottom: 8px;">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto eveniet dolorum officiis
                        ncidunt natus veritatis similique.</p>
                    <a href="#">Read more</a>

                </div>
            </div>
        </div>
        <!--  end of 1st course -->

        <!-- starting of 2st course -->
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Boostrap</h3>
                    <img class="content-img" src="img/bootstrap.jpg"
                        style=" left:1% ;top :1%;height:70px; width:100px; border-radius: 90%;position: relative;opacity: .6;margin-bottom: 8px;">

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto eveniet dolorum officiis
                        earum.
                        Voluptatem incidunt natus veritatis similique.</p>
                    <a href="#">Read more</a>

                </div>
            </div>
        </div>
        <!--  end of 2nd course -->

        <!-- starting of 3st course -->
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Python</h3>
                    <img class="content-img" src="img/python.jpg"
                        style=" left:1% ;top :1%;height:70px; width:100px; border-radius: 90%;position: relative;opacity: .6;margin-bottom: 8px;">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing usto modi beatae.
                        Consectetur possimus, accusantium nam eligendi minima sit
                        <a href="#">Read more</a>

                </div>
            </div>
        </div>
        <!-- end of 3st course -->

        <!-- starting of 4st course -->
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>04</h2>
                    <h3>Cyber Security</h3>
                    <img class="content-img" src="img/cyber-security.jpg"
                        style=" left:2% ;top :1%;height:70px; width:80px; border-radius: 99%;position: relative; opacity: .6;margin-bottom: 8px;">

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto eveniet dolorum officiis
                        earum. Voluptatem incidunt natus veritatis similique</p>
                    <a href="#">Read more</a>

                </div>
            </div>
        </div>
        <!-- end of 4st course -->

        <!-- starting of 5st course -->
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>05</h2>
                    <h3> UI / UX Design</h3>
                    <img class="content-img" src="img/ui-ux.png"
                        style=" left:1% ;top :1%;height:70px; width:100px; border-radius: 90%;position: relative;opacity: 0.6;margin-bottom: 8px;">

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto eveniet dolorum officiis
                        earum. Perferendis aperiam cum nulla et itaque ea accusamus.</p>
                    <a href="#">Read more</a>

                </div>
            </div>
        </div>
        <!-- end of 5st course -->

        <!-- starting of 6st course -->

        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>06</h2>
                    <h3>Java</h3>
                    <img class="content-img" src="img/java.png"
                        style=" left:1% ;top :1%;height:60px; width:80px; border-radius: 90%;position: relative;opacity: .6;margin-bottom: 8px;">

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto eveniet dolorum officiis
                        earum. Perferendis aperiam cum nulla et itaque ea accusamus, placeat ipsa necessitatibus
                        veniam.
                        <a href="#">Read more</a>

                </div>
            </div>
        </div>
        <!-- end of 6st course -->

    </div>

</div>
<!-- view all course starting -->
<div class="viewallcourse" font-family: Arial, Helvetica, sans-serif;
    style="width: 100%;height: 40px ;padding:4px 4px;background:  #1a5681;display: flex;justify-content:space-evenly;font-family:Arial, Helvetica, sans-serif ">
    <!-- <div class="centerlana" style="margin-left:42%;">
            <a href="#" class="viewall"
                style="padding-top:1px;width:200px;display:flex;text-align: center;justify-content: center;text-decoration: none; font-size: 17px;font-weight: 500;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;background: #1a5681; color: #fdf4f4;border: solid 1px white;">View
                All Courses</a>
        </div> -->
    <!-- </div> -->
    <div style="display: flex;;margin-left: -1%;" class="mediaa">
        <span style="padding-top: auto;color: whitesmoke;padding: 5px 15px; margin-right: 10px;position:sticky;">Click
            to View
        </span>
        <span style="position: sticky;">
            <a href="courses.php" id="all-course" class="media"
                style=" font-weight: 500;text-decoration:none !important; color: #fdf4f4;display: flex;justify-content:center ;padding: 3px 20px;border: 1px solid whitesmoke;border-radius: 5px ;transition: 1s;">
                All Courses</a>
        </span>
    </div>
</div>

<!-- view all course ending -->

<!-- start contact -->
 <!-- contact us starting -->
 <fieldset style="background-color: #1a5681da;">
        <div class="container-mt-10" id="contact" style="margin-bottom:20px;position: relative;">
            <h2 class="contact"
                style=" margin-left: 20%;padding-top: 19px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color: aliceblue;">
                Contact Us</h2><img class="content-img" src="img/email.png"
                style="height:30px; width:34px;top: -33px;left: -13px; border-radius: 50%;position: relative;margin-left: 32%;margin-top:-20px !important">


            <div class="row">
                <div class="col-md-8" style="  font-family: PT Serif, serif;
                font-family: Ubuntu, sans-serif;padding-top: -20px;">
                    <form action="" method="" style="width: 500px; margin-left: 20%;color: #1a5681;">
                        <input type="text" class="form-control" name="name"
                            style="color: #126cacc2 ;font-weight:700;font-size:20px " placeholder="Enter Name"><br>
                        <input type="text" class="form-control" name="subject"
                            style="color: #126cacc2 ;font-weight:700;font-size:20px " placeholder="Enter Subject"><br>
                        <input type="email" class="form-control" name="email"
                            style="color: #126cacc2 ;font-weight:700;font-size:20px " placeholder="Enter Email"><br>
                        <textarea class="form-control" name="message"
                            style="color: #126cacc2 ;font-weight:700;font-size:20px " placeholder="How can we help you?"
                            style="height: 150px;"></textarea>
                        <br>
                        <input class="submit" id="sub" value="SUBMIT" name="submit" type="submit"
                            style="padding:1px 3px ;height:35px;width: 100px;background:#fff;color: #1a5681;font-weight:bold;border: solid 1.5px rgba(0, 46, 73, 0.589);border-radius: 5px;font-size: 19px;"><br><br>
                    </form>
                </div>
                <!-- 
                <div class="col-md-4 stripe text-white"></div> -->
            </div>
        </div>

    </fieldset>

    <!-- address start -->
    <div id="address" class="col-md-4 stripe text-center"
        style=" width:300px; font-family: PT Serif, serif;top:2150px;
        font-family: Ubuntu, sans-serif; right: 426px !important;bottom:-1502x !important ;position:absolute;color: #fff;transform: rotate(-7deg);background:linear-gradient(40deg, rgba(8, 107, 165, 0.61), #1e5491);border: solid 1.5px #fff;border-radius: 9px 18px 18px 18px;">
        <h2 style="font-weight: bold !important;word-spacing: 4px;">Apna College</h2>
        <p class="addp">Apna College,Surat,<br>
            Near Modern Town Ship,<br>
            Gujarat - 395010<br>
            Phone: +10101010<br>
            www.apnacollege.com
        </p>
    </div>

    <!-- address end-->
    <!-- contact us ending -->

<!-- end contact  -->


<div id="social-media"
    style="min-width:100%;display: flex;justify-content:space-evenly ;background-color:#023047 ;height:32px;">
    <span style="padding-top: 2px;">
        <img src="https://img.icons8.com/fluency/50/000000/meta.png" style="height: 30px;width: 30px;" />&nbsp;
        <a href="#" style=" font-weight: 500;text-decoration:none !important; color: #fdf4f4;"> Meta</a>
    </span>&emsp;

    <span class="twitter" style="margin-right :116px !important;padding-top: 2px;">
        <img src="https://img.icons8.com/fluency/48/000000/twitter.png" style="height: 30px;width: 30px; " />&nbsp;
        <a href="#" style=" font-weight: 500;text-decoration:none !important;color: #fdf4f4;"> Twitter</a>
    </span>
    <span style="padding-left :5px;padding-top: 2px;">
        <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"
            style="height: 30px;width: 30px; margin-left: 20px;" />&nbsp;
        <a href="#" style=" font-weight: 500;text-decoration:none !important;color: #fdf4f4;"> Whatsapp</a>
    </span>&emsp;

    <span class="twitter" style="padding-left:5px;padding-top: 2px;">
        <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"
            style="height: 30px;width: 30px; " />&nbsp;
        <a href="#" style=" font-weight: 500;text-decoration:none !important;color: #fdf4f4; padding: 1px 10;">
            Instagram</a>
    </span>
</div>
<!-- social media end -->




<!-- start footer -->
<div class="adlog">
        <footer style="display: flex; " class="container-fluid bg-dark  p-2 fw-bold">
            <small class="text-white" style="margin-left:20em">
                Designed
                by &nbsp;<a href="#" class="jatin"
                    style=" margin-top :7px;font-weight: bold;text-decoration:none;color: #fdf4f4;padding: 0.5px 6px;border: 1px solid whitesmoke;border-radius: 5px ;">
                    <i>Jatin</i></a> &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                &emsp;&emsp; &emsp;&emsp;&emsp; 

                &emsp;&emsp; Copyright &copy; 2022
                &emsp;
                &emsp; &emsp; &emsp;<a href="#" id="all-course" class="adminlog" data-bs-toggle="modal"
                    data-bs-target="#exampleModal3"
                    style=" margin-left:15em;font-weight: bold;text-decoration:none !important; color: #fdf4f4;padding: 0.9px 6px;border: 1px solid whitesmoke;border-radius: 5px ;">
                    Admin Login</a> &emsp; </small>

        </footer>

    </div> 

<!-- < Jquery and Bootstrap Javacsript --> 
<script src=" js/jquery.min.js">
</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Font-Awesome JS -->
<script src="js/all.min.js"></script>

<!-- For Login Category -->
<script src="js/loginsubmit.js"></script>


<!-- Modal -->




</body>

</html><!-- end footer --><br />
<b>Warning</b>:  include(./js/dissmiss.js): Failed to open stream: No such file or directory in <b>C:\xampp\htdocs\ischool\studlogin.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  include(): Failed opening './js/dissmiss.js' for inclusion (include_path='C:\xampp\php\PEAR') in <b>C:\xampp\htdocs\ischool\studlogin.php</b> on line <b>200</b><br />





        <!-- end navbar -->
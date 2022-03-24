<?php
//     if(!isset($_SESSION)){
//         session_start();
//     }
//     include('header.php');
//     include('../adminDbConnection.php');

// // ADMIN SESSION
// // fOR SECURITY PURPOSE WE WILL USE SESSION HERE

// if(isset($_SESSION['is_admin_login'])){
//         $adminEmail = $_SESSION['admin_email'];
//     }
//     else{
//       echo "<script> loaction.href='..index.php' </script>";
//     }
include('header.php');
    include('../adminDbConnection.php');
?>
<!----------------------------------REAL WORK START FROM HERE------------------------------------- -->
<div class="realbody">
    <!-- center div -->
    <div class="coursetable" style="margin-top:25%;margin-left:-.5%;width:937px;height: 52px;"
   >
        Courses Offered </div>
    <div class="box1" style="    width: 200px;
    height: 184px;
    background: rgba(255, 255, 255, 0.3);
    box-shadow: 0 8px 32px 0 rgb(31 38 135 / 37%);
    backdrop-filter: blur(9.5px);
    -webkit-backdrop-filter: blur(9.5px);
    border-radius: 29px;
    border: 1px solid rgba(21, 96, 165, 0.364);
    display: grid;
    margin-top: 20px;
    margin-left: 24px;
    background-color: rgb(145, 77, 22);">
        <span class="course" style="padding-left:40px">Course</span>
        <hr>
        <div class="number1">5</div>
        <div class="link1">
            <a href="#" style="font-size:large"> Views</a>
        </div>
    </div>

    <div class="box2" style="    width: 200px;
    height: 184px;
    background: rgba(255, 255, 255, 0.3);
    box-shadow: 0 8px 32px 0 rgb(31 38 135 / 37%);
    backdrop-filter: blur(9.5px);
    -webkit-backdrop-filter: blur(9.5px);
    border-radius: 20px;
    border: 1px solid rgba(21, 96, 165, 0.364);
    display: grid;
    margin-top: 20px;
    margin-left: 24px;
    background-color: rgb(63, 141, 128);">
        <span class="students" style="padding-left:30px">Students</span>
        <hr>
        <div class="number2">8</div>
        <div class="link2">
            <a href="#"  style="font-size:large"> Views</a>
        </div>
    </div>
    <div class="box3" style="    width: 200px;
    height: 184px;
    background: rgba(255, 255, 255, 0.3);
    box-shadow: 0 8px 32px 0 rgb(31 38 135 / 37%);
    backdrop-filter: blur(9.5px);
    -webkit-backdrop-filter: blur(9.5px);
    border-radius: 20px;
    border: 1px solid rgba(21, 96, 165, 0.364);
    display: grid;
    margin-top: 20px;
    margin-left: 24px;
    background-color: rgb(64, 132, 163);">
        <span class="sold" style="padding-left:40px"> &nbsp;&nbsp;Sold</span>
        <hr>
        <div class="number3">3</div>
        <div class="link3">
            <a href="#" style="font-size:large"> Views</a>
        </div>
    </div>
    <br>
</div>
<div>
    <div class="table-responsive" style="margin-left:20.7%;"> 
        <table class="table" style="width:100%;">
            <thead>
                <!-- <tr>
                    <tr> -->
                <th scope="col" style="width:110px">Course ID</th>
                <th scope="col" style="width:100px">Order ID</th>
                <th scope="col">Student Email</th>
                <th scope="col">Order Date</th>
                <th scope="col">Amount</th>
                <th scope="col" style="width:120px">Action</th>
                <!-- </tr>
                    </tr> -->
            </thead>
            <tbody>
                <tr>
                    <th scope="row" data-label="courseid">100</th>
                    <td data-label="orderid">22</td>
                    <td data-label="studemail">zayn@gmail.com</td>
                    <td data-label="orderdate">09/03/2022</td>
                    <td data-label="amount">2000</td>
                    <td data-label="action"><button type="submit" class="btn btn-secondary" name="delete"
                            value="Delete"><img src="dashimage/trash-can-solid.svg" alt="delete"
                                style="height: 17px; width: 20px; "></button></td>

                </tr>
            </tbody>
        </table>
    </div>
</div>



<!-- jquery and bootstrap javascript -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<script type="text/javascript" src="../js/all.min.js"></script>

</body>

</html>
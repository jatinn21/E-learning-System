<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include('header.php');
    include('../DbConnection.php');

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
<!------------------------UPdate query ----------------->
<?php
if(isset($_POST['student_update'])){
    if (($_POST['student_id']=="") || ($_POST['student_name']=="") || ($_POST['student_pass']=="") || ($_POST['student_email']==""))
    {       
   $msg = "<div class='msg' style='padding-left:8px;font-size 18px;
   width: 174px;
   margin-left:10px;
   color: red;
   font-weight: 200;
   position: absolute;
   background-color: white;'>*Fill All Details*</div>";
  }
 else{
// include("./adminDbConnection.php");
    $student_id =$_POST['student_id'];
    $student_name =$_POST['student_name'];
    $student_email = $_POST['student_email'];
    $student_pass = $_POST['student_pass'];
                                                       

  $sql ="UPDATE `student` SET `stud_id` = '$student_id',`stud_name` = '$student_name', `stud_email` = '$student_email', `stud_pass` = '$student_pass',
    WHERE `student`.`stud_id` = '$student_id'";

//   $sql ="UPDATE `student` SET `stud_name` = '$student_name', `stud_email` = '$student_email', `stud_pass` = '$student_pass' WHERE `student`.`stud_id` = '$student_id';"


  $result = mysqli_query($conn,$sql);
  if($result){
      $insert = 1;
      $msg =  "<div class='msg' style='font-size 16px;
      width: 230px;
      margin-left:10px;
      color: green;
      font-weight: 200;
      position: absolute;text-align:center;
      background-color: white;'>*RECORD UPDATED*</div>";
  }
  else{
     $insert = 0; 
    $msg =  "<div class='msg' style='padding-left:8px;font-size 18px;
    width: 214px;
    margin-left:10px;
    color: red;
    font-weight: 200;
    position: absolute;
    background-color: white;'>*FAILED UPDATED*</div>";
  }
}
}
?>

<div class="addCourse"
    style="position: relative;
        transform: translateY(69px);
margin-left: 20%;
width: 60%;
background: linear-gradient(126deg, #56b2b7, rgb(23, 109, 138));
border-radius: 50px;
height: 780px;
padding: 6px 30px;
box-shadow: rgb(0 0 0 / 0%) -3px -23px 27px 29px inset, rgb(0 8 0 / 23%) 105px 199px 129px 132px inset, rgb(23 109 134 / 97%) 0px -79px 106px 0px inset, rgb(162, 167, 165) 0px 0px 65px, rgba(22, 128, 189, 0.521) 0px 4px 96px, rgba(29, 106, 126, 0.54) 0px 3px 24px, rgb(0 0 0) 19px 15px 31px, rgb(0 0 0 / 24%) 0px 149px 84px;">
    <div class="title" style="text-align:center">
        <h1 style="color:snow;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">UPDATE COURSE
        </h1>
    </div>
    <hr style="width: 99%;background-color: black;">

    <?php
 if(isset($_POST['edit'])){
    $sql =  "SELECT * FROM `student` WHERE `student`.`stud_id` = {$_REQUEST['id']}";
      $result= mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
 }
?>
    <div class="courseform" style="padding-left:57px;font-size:20px;padding-top:-15px">
        <form action="#" method="POST" 
            style="font-size:20;font-size:20px;padding-left:10px;">
            <div>
                <div>
                    <label for="CourseId"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Student
                        Id</label><br>
                    <input type="text" readonly value="<?php
                    if(isset($row['stud_id'])){
                        echo $row['stud_id'];
                    }
                    ?>" name="student_id" id="student_id" aria-describedby="nameHelp" disabled   value="<?php echo $row['stud_id'] ?>"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px; margin-bottom:6px;border: 1.8px solid black;">

                </div>

                <div>
                    <label for="CourseName"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Student
                        Name</label><br>
                    <input type="text" value="<?php
                    if(isset($row['stud_name'])){
                        echo $row['stud_name'];
                    }
                    ?>" name="student_name" id="course_name" aria-describedby="nameHelp" autofocus
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px; margin-bottom:6px">

                </div>
                <div>
                    <label for="CourseDescription"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Student Email</label><br>
                    <input type="text" name="student_email"
                        style="color: #126cacc2 ;font-size:20px;width:90%;height:60px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px;color:black" value="<?php
                    if(isset($row['stud_email'])){
                        echo $row['stud_email'];
                    }
                    ?>" >
                </div>
                <div>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Student Password</label><br>
                    <input type="password" value="<?php
                    if(isset($row['stud_pass'])){
                        echo $row['stud_pass'];
                    }
                    ?>" name="student_pass" id="course_author" aria-describedby="author"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:58px">
                </div>
             
               
               
                <!-- <br> -->
                <?php
                     if(isset($msg)){
                     echo $msg;
                 }
            
                ?>

                    <button type="submit" id="course_submit" name="student_update" style=" 
                       position: absolute;
    width: 16%;
    margin-left: 44%;
    height: 40px;
    border-radius: 10px;
    font-size: 20px;
    padding-left: 5px;
    font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;
    font-weight: 600;
    border: 1px solid black;
    margin-top: -36px !important;">Update</button>
                </form>
                <button type="submit" id="course_cancel"
                    style=" transition: 0.7s;
                    position: absolute;
                        width: 14%;
                        margin-left: 62%;
                        height: 40px;
                        border-radius: 10px;
                        margin-top: -35.5px;                      
                        padding-left: 0px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-weight:600;border: solid 1px black;">
                    <?php
                if(isset($insert)){
                if($insert==1){
                    echo "<a href='student.php' style='text-decoration: none;font-size: 20px;'>Check</a>";
                }
            else{
                echo "<a href='student.php' style='text-decoration: none;font-size: 20px;'>Back</a>";

            }
            }
                else{
                    echo "<a href='student.php' style='text-decoration: none;font-size: 20px;'>Cancel</a>";
                }
                ?>
                </button>
            </div>
        </form>
    </div>

</div>
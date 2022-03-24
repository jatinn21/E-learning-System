<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include('header.php');
    include('../adminDbConnection.php');

// ADMIN SESSION
// fOR SECURITY PURPOSE WE WILL USE SESSION HERE

if(isset($_SESSION['is_admin_login'])){
        $adminEmail = $_SESSION['admin_email'];
    }
    else{
      echo "<script> loaction.href='..index.php' </script>";
    }
include('header.php');
    include('../adminDbConnection.php');
?>
<!------------------------UPdate query ----------------->
<?php
include("../adminDbConnection.php");

if(isset($_POST['lesson_update'])){
    if(($_POST['lesson_id']=="") || ($_POST['lesson_name']=="")||
    ($_POST['lesson_desc']=="")||($_POST['course_id']=="")||($_POST['course_name']=="") )
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
include("../adminDbConnection.php");
$lid = $_POST['lesson_id'];
$lname = $_POST['lesson_name'];
$ldesc = $_POST['lesson_desc'];
$cid = $_POST['course_id'];
$cname = $_POST['course_name'];
   
  //img work
  $l_vid = $_FILES['lesson_link']['name'];
  $l_vid_temp = $_FILES['lesson_link']['tmp_name'];
  $vid_path = '../lessonvid/'.$l_vid;
  move_uploaded_file($l_vid_temp,$vid_path);



  $sql = " 
  UPDATE `lesson` SET `lesson_id` = '$lid' ,`lesson_name` = '$lname' ,`lesson_desc` = '$ldesc' ,
  `course_id` = '$cid' ,`lesson_name` = '$cname' ,`lesson_link` = '$vid_path' WHERE 
   `lesson_id` = '$lid'";
   
  $result = mysqli_query($conn,$sql);
  if($result){
      $insert = 1;
      $msg =  "<div class='msg' style='font-size 16px;
      width: 230px;
      margin-left:10px;
      color: green;
      font-weight: 200;
      position: absolute;text-align:center;
      background-color: white;'>*LESSON UPDATED*</div>";
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
        <h1 style="color:snow;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">UPDATE LESSON
        </h1>
    </div>
    <hr style="width: 99%;background-color: black;">

    <?php
 if(isset($_POST['edit'])){
    $sql = " SELECT * FROM `lesson` WHERE `lesson`.`lesson_id` = {$_POST['id']}";
      $result= mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
 }
?>
    <div class="courseform" style="padding-left:57px;font-size:20px;padding-top:-15px">
        <form action="#" method="POST" enctype="multipart/form-data"
            style="font-size:20;font-size:20px;padding-left:10px;">
            <div>
                <div>
                    <label for="lesson_id"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Lesson
                        Id</label><br>
                    <input type="text"  value="<?php
                    if(isset($row['lesson_id'])){
                        echo $row['lesson_id'];
                    }
                    ?>" name="lesson_id" id="lesson_id" aria-describedby="nameHelp" readonly   
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;
                         margin-bottom:6px;border: 1.8px solid black;background-color:grey;">

                </div>

                <div>
                    <label for="CourseName"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Lesson
                        Name</label><br>
                    <input type="text" autofocus value = "<?php
                    if(isset($row['lesson_name'])){
                        echo $row['lesson_name'];
                    }
                    ?>" name="lesson_name" id="lesson_name" aria-describedby="nameHelp" 
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px; margin-bottom:6px">

                </div>
                <div>
                    <label for="CourseDescription"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Lesson
                        Description</label><br>
                    <textarea name="lesson_desc" rows="2" cols="70" maxlength="500" autofocus
                        style="color: #126cacc2 ;font-size:20px;width:90%;height:60px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px"><?php
                    if(isset($row['lesson_desc'])){
                        echo $row['lesson_desc'];
                    }
                    ?> 
                    </textarea>
                </div>
                <div>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course ID</label><br>
                    <input type="text" value="<?php
                    if(isset($row['course_id'])){
                        echo $row['course_id'];
                    }
                    ?>" name="course_id" id="course_id" aria-describedby="author" readonly
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px;background-color:grey">
                </div>
                <div>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        Name</label><br>
                        <input type="text" value="<?php
                    if(isset($row['course_name'])){
                        echo $row['course_name'];
                    }
                    ?>" name="course_name" id="course_name" aria-describedby="duration"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:5px">
                </div>
                <div>
                    <?php   if(!isset($_POST['lesson_update'])){ ?>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                            Lesson Link</label><br>
                            
                            <video width="380" height="190" controls style="background-color:snow">
                            <source 
                            src="<?php if(isset($row['lesson_link'])){
                                echo $row['lesson_link'];} ?>"
                           >
                            <!-- <source src="" type="video/ogg"> -->
                            Your browser does not support HTML video.
                            </video>
                            
                            <br>
                            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
                            <?php }?>
              
                </div>
                <!-- <br> -->
                <?php
                     if(isset($msg)){
                     echo $msg;
                 }
            
                ?>

                    <button type="submit" id="course_submit" name="lesson_update" style=" 
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
                                          
                    echo "<a href='lesson.php' style='text-decoration: none;font-size: 20px; margin-top: 36px;    '>Check</a>";
                }
            else{
                echo "<a href='lesson.php' style='text-decoration: none;font-size: 20px;margin-top: 36px; '>Back</a>";

            }
            }
                else{
                    echo "<a href='lesson.php' style='text-decoration: none;font-size: 20px;margin-top: 36px; '>Cancel</a>";
                }
                ?>
                </button>
            </div>
        </form>
    </div>

</div>
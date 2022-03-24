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

  if(isset($_POST['lessonSubmit'])){
   if (($_POST['lesson_name']=="") || ($_POST['lesson_desc']=="") || ($_POST['course_id']=="") || ($_POST ['course_name']==""))
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

   $lesson_name =$_POST['lesson_name'];
  $lesson_desc = $_POST['lesson_desc'];
  $course_id = $_POST['course_id'];
  $course_name = $_POST['course_name'];
  
  // video  work here 
  // there are 4 arrays in $_FILES - size,name,tmp_name,error
  // if there is any input of type="file" then never forget to add --> enctype="multipart/form-data"
  $lesson_link = $_FILES['lesson_link']['name'];
  $lesson_link_tmp = $_FILES['lesson_link']['tmp_name'];
  $link_folder = '../lessonvid/'.$lesson_link;
  move_uploaded_file($lesson_link_tmp,$link_folder);
  
  
//   $sql = "INSERT INTO `course` ( `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_sp_price`, `course_og_price`) 
//   VALUES ('$course_name', '$course_desc', '$course_author', '$path_name', '$course_duration', '$course_sp_price', '$course_og_price')";
//   $result = mysqli_query($conn,$sql);
    
$sql = "INSERT INTO `lesson` (`lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES ( '$lesson_name', '$lesson_desc','$link_folder', '$course_id', '$course_name');";
$record = mysqli_query($conn,$sql);

  if($record){
      $insert=1;
      $msg ="<div class='msg' style='font-size:20px;margin-left:10px;padding-left:10px;color:green;background-color:white;width:230px;font-weight:400;position:absolute'>*Added Successfully*</div>";

  }
  else{
    $insert=0;
    $msg ="<div class='msg' style='font-size:20px;padding-left:20px;color:red;background-color:white;width:300px;font-weight:200;position:absolute'>*Please Try Again Later*</div>";

  }
 }
  

}

?>




<div class="addCourse"
    style="    position: absolute;
margin-left: 20%;
margin-top: 5%;
width: 60%;
background: linear-gradient(126deg, #56b2b7, rgb(23, 109, 138));
border-radius: 50px;
height: 760px;
padding: 20px 30px;
box-shadow: rgb(0 0 0 / 0%) -3px -23px 27px 29px inset, rgb(0 8 0 / 23%) 105px 199px 129px 132px inset, rgb(23 109 134 / 97%) 0px -79px 106px 0px inset, rgb(162, 167, 165) 0px 0px 65px, rgba(22, 128, 189, 0.521) 0px 4px 96px, rgba(29, 106, 126, 0.54) 0px 3px 24px, rgb(0 0 0) 19px 15px 31px, rgb(0 0 0 / 24%) 0px 149px 84px;">
    <div class="title" style="text-align:center">
        <h1 style="color:snow;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">ADD NEW LESSON
        </h1>
    </div>
    
    <hr style="width: 99%;background-color: black;">

    <div class="courseform" style="padding-left:57px;font-size:20px;padding-top:10px">
        <form action="#" method="POST" enctype="multipart/form-data" style="font-size:20;font-size:20px;padding-left:10px;">
            <div >
            <div>
                    <label for="Lessonid"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        ID</label><br>
                    <input type="text" name="course_id" id="course_id" readonly
                        aria-describedby="nameHelp" value="<?php if(isset($_SESSION['course_id'])){echo $_SESSION['course_id'];} ?>" 
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;background-color:grey; margin-bottom:10px">

                </div>

                <div>
                    <label for="CourseName"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        Name</label><br>
                    <input type="text" name="course_name" id="course_name" value="<?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];} ?>" 
                        aria-describedby="nameHelp" readonly
                      
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;background-color:grey; margin-bottom:10px">

                </div>

                <div>
                    <label for="LessonName"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Lesson
                        Name</label><br>
                    <input type="text" name="lesson_name" id="lesson_name"
                        aria-describedby="nameHelp"
                      autofocus
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px; margin-bottom:10px">

                </div>
                <div >
                    <label for="lessonDescription"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Lesson
                        Description</label><br>
                    <textarea name="lesson_desc" id="lesson_desc" row=2
                        style="color: black ;;font-size:20px;width:90%;height:80px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:10px"></textarea>
                </div>
                <div >
                    <label for="lessonLink"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Lesson Video Link</label><br>
                    <input type="file" name="lesson_link" id="lesson_link" required="required"
                        aria-describedby="lesson_link"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:10px">
                </div>
              
                <?php
                    if(isset($msg)){
                    echo $msg;
                }

                ?>


                <button type="submit"  id="course_submit" name="lessonSubmit"
                    style=" 
                width: 16%;
                margin-left: 54%;
                height: 40px;
                border-radius: 10px;
                margin-top: -13px !important;
                font-size: 20px;
                padding-left: 5px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-weight:600;border: solid 1px black;">Submit</button>

                <button type="submit" id="course_cancel" 
                    style=" transition: 0.7s;
                    position: absolute;
                        width: 14%;
                        margin-left: 2%;
                        height: 40px;
                        border-radius: 10px;
                        margin-top: -4.5px;                      
                        padding-left: 0px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-weight:600;border: solid 1px black;">

                    <?php
                if(isset($insert)){
                if($insert==1){
                    echo "<a href='lesson.php' style='text-decoration: none;font-size: 20px;'>Check</a>";
                }
            else{
                echo "<a href='lesson.php' style='text-decoration: none;font-size: 20px;letter-spacing:3px'>Back</a>";

            }
            }
                else{
                    echo "<a href='lesson.php' style='text-decoration: none;font-size: 20px;'>Cancel</a>";
                }
                ?>
                </button>
            </div>
        </form>
    </div>

</div>


<?php
include('footer.php');
?>
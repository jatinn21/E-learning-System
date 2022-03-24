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

if(isset($_POST['course_update'])){
    if (($_POST['course_id']=="") || ($_POST['course_name']=="") || ($_POST['course_desc']=="") || ($_POST['course_author']=="") || ($_POST['course_og_price']=="") || ($_POST['course_sp_price']=="") || ($_POST['course_duration'] =="" ))
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
$c_id =$_POST['course_id'];

   $c_name =$_POST['course_name'];
  $c_desc = $_POST['course_desc'];
  $c_author = $_POST['course_author'];
  $c_duration = $_POST['course_duration'];
  $c_og_price = $_POST['course_og_price'];
  $c_sp_price = $_POST['course_sp_price'];
   
  //img work
  $c_img = $_FILES['course_image']['name'];
  $c_img_temp = $_FILES['course_image']['tmp_name'];
  $img_path = 'coursefolder/'.$c_img;
  move_uploaded_file($c_img_temp,$img_path);



$sql = "
UPDATE `course` SET `course_name` = '$c_name', `course_desc` = '$c_desc', `course_author` = '$c_author', `course_img` = '$img_path',
`course_duration` = '$c_duration', `course_sp_price` = '$c_sp_price', `course_og_price` = '$c_og_price' WHERE `course`.`course_id` = $c_id;
";
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
    $sql =  "SELECT * FROM `course` WHERE `course`.`course_id` = {$_REQUEST['id']}";
      $result= mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
 }
?>
    <div class="courseform" style="padding-left:57px;font-size:20px;padding-top:-15px">
        <form action="#" method="POST" enctype="multipart/form-data"
            style="font-size:20;font-size:20px;padding-left:10px;">
            <div>
                <div>
                    <label for="Course_id"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        Id</label><br>
                    <input type="text"  value="<?php
                    if(isset($row['course_id'])){
                        echo $row['course_id'];
                    }
                    ?>" name="course_id" id="course_id" aria-describedby="nameHelp" readonly   value="<?php echo $row['course_id'] ?>"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px; margin-bottom:6px;border: 1.8px solid black;background-color:grey;">

                </div>

                <div>
                    <label for="CourseName"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        Name</label><br>
                    <input type="text" autofocus value = "<?php
                    if(isset($row['course_name'])){
                        echo $row['course_name'];
                    }
                    ?>" name="course_name" id="course_name" aria-describedby="nameHelp" 
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px; margin-bottom:6px">

                </div>
                <div>
                    <label for="CourseDescription"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Course
                        Description</label><br>
                    <textarea name="course_desc" rows="2" cols="70" maxlength="500" autofocus
                        style="color: #126cacc2 ;font-size:20px;width:90%;height:60px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px"><?php
                    if(isset($row['course_desc'])){
                        echo $row['course_desc'];
                    }
                    ?> 
                    </textarea>
                </div>
                <div>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Teacher</label><br>
                    <input type="text" value="<?php
                    if(isset($row['course_author'])){
                        echo $row['course_author'];
                    }
                    ?>" name="course_author" id="course_author" aria-describedby="author"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px">
                </div>
                <div>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        Duration</label><br>
                    <input type="text" value="<?php
                    if(isset($row['course_duration'])){
                        echo $row['course_duration'];
                    }
                    ?>" name="course_duration" id="course_duration" aria-describedby="duration"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px">
                </div>
                <div>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        Orginal Price</label><br>
                    <input type="text" value="<?php
                    if(isset($row['course_og_price'])){
                        echo $row['course_og_price'];
                    }
                    ?>" name="course_og_price" id="course_og_price" aria-describedby="og_price"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px">
                </div>
                <div>
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Course
                        Selling Price</label><br>
                    <input type="text" value="<?php
                    if(isset($row['course_sp_price'])){
                        echo $row['course_sp_price'];
                    }
                    ?>" name="course_sp_price" id="course_sp_price" aria-describedby="sp_price"
                        style="width:90%;height:40px;border-radius:10px;font-size:20px;padding-left:10px;margin-bottom:6px">
                </div>
                <div style="margin-top:3px">
                    <label for="Author"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        Uploaded Image:</label>

                    <?php   if(!isset($_POST['course_update'])){ ?>
                    <img src="<?php echo $row['course_img']; ?>" alt="img uplodaded"
                        style="border-radius:10px;height:55px;width: 70px;margin-bottom:8px">
                    <?php }?>
                    <br>
                    <input type="file" class="custom-file-input" id="course_image" name="course_image"
                        style="width:35%;height:27px;border-radius:15px;font-size:20px;margin-top:4px;font-size:20px;padding-left:10px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                </div>
                <!-- <br> -->
                <?php
                     if(isset($msg)){
                     echo $msg;
                 }
            
                ?>

                    <button type="submit" id="course_submit" name="course_update" style=" 
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
                    echo "<a href='course.php' style='text-decoration: none;font-size: 20px;'>Check</a>";
                }
            else{
                echo "<a href='course.php' style='text-decoration: none;font-size: 20px;'>Back</a>";

            }
            }
                else{
                    echo "<a href='course.php' style='text-decoration: none;font-size: 20px;'>Cancel</a>";
                }
                ?>
                </button>
            </div>
        </form>
    </div>

</div>
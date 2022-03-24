<?php
include('../adminDbConnection.php');
include('header.php');
error_reporting(0);
?>


<div class="col-sm-9 mt-5" style="position:absolute;margin-left:30px;margin-top:80px;display:inline">
    <form action="" class="mt-4 form-inline d-print-none" method="post" >
        <div claa="form-group" style="width:200px;margin-left:25%;margin-top:7%" >
            <label for="checkid">Enter Course ID :</label>
        </div>
            <input type="number"  class="form-control" id="checkid" name="checkid" style="margin-left: 38%;
    margin-top: -3%;width:180px">
      
      
        <button type="submit" class="btn btn-danger" style="margin-left: 57%;
    margin-top: -6%;">Search</button>

    </form>

    <?php
$sql = "SELECT course_id FROM course";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    if(isset($_POST['checkid']) && $_POST['checkid']==$row['course_id'])
        {
// $sql = "SELECT course_id FROM course WHERE course_id = $_POST['checkid']";
 $sql = "SELECT * FROM `course` WHERE `course_id` = {$_POST['checkid']}";
            // $sql = "SELECT * FROM course WHERE course_id = $_REQUEST['checkid'];";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        
             if(($row['course_id'])==$_POST['checkid'])
             {
                $_SESSION['course_id']= $row['course_id'];
                $_SESSION['course_name']= $row['course_name'];
                ?>
<h3 class="bg-dark text-white mt-3" style="margin-left:21%;height:44px;padding-left:40px;padding-top:3px;width:1020px"> COURSE ID : <?php if(isset($row['course_id']))
{
    echo "<font  style=color:cornflowerblue;>".$row['course_id']."</font>";?>  
    &emsp; Course Name: &nbsp;
    <?php if(isset($row['course_name']))
    {
        echo "<font  style=color:cornflowerblue;>".$row['course_name']."</font>"; 
        echo '  <div class="add" style="    margin-left: 103%;
        margin-top: 537px;
        opacity: 5.98;">
            <a href="addLesson.php"><img
                    src="https://img.icons8.com/external-flat-icons-inmotus-design/67/000000/external-add-tv-features-flat-icons-inmotus-design.png" /></a>
                   
        </div> '; ?> 
        </h3>

        <!-- all looks cool -->
 <?php
    $sql = "SELECT * FROM lesson  where course_id = {$_POST['checkid']}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0){

    echo '<table class="table" id="crazy_table" style="margin-left:21%;width:1020px">
        <thead>
        <tr>
        <th scope = "col">Lesson ID</th>
        <th scope = "col">Lesson Name</th>
        <th scope = "col">Lesson Link</th>
        <th scope = "col">Action</th>
        </tr>
        </thead>
        </tbody>';    
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<th scope="row">'.$row['lesson_id'].'</th>';
            echo '<td>'.$row['lesson_name'].'</td>';
            echo '<td>'.$row['lesson_link'].'</td>';
            // $sequence = 0;
            // <form action="editlesson.php" method="POST" >
            // <input type="hidden" name="id" value='.$row["lesson_id"].'>
            // <button type="submit" name = "view" id="edit" class="btn btn-info mr-4" 
            // style="border:solid 1px white;margin-left:20px" 
            //  value="View" >
            // <i class ="fas fa-pen"></i></button>
            // </form>
            echo '<td style="width:100px;border:none;display:inline-flex " >
          
          


            <form action="lessonedit.php" method="POST" >
            <input type="hidden" name="id" value='.$row["lesson_id"].'>
            <button type="submit" id="edit"  name="edit" style="margin-left:10px" value="edit">
                         <img src="dashimage/edit-solid.svg" alt="delete"
                          style="    height: 27px;
 width: 39px;padding: 3px 2px;"></button> </form>
                                
            &emsp;


            <form action="" method="POST" ><input type="hidden" name="id" 
            value='.$row["lesson_id"].'><button type="submit" 
            name="delete" value="delete" 
          
            ><img
            src="dashimage/trash-can-solid.svg" alt="delete"
            style="height: 27px;
           width: 37px;
           padding: 3px 1px;"></button></form></td>
            </tr>';
        }
        echo '</tbody>
        </table>';}
else{
    // echo '<h3 class="bg-dark mt-1" style="margin-left:25%;height:40px;padding-left:40px;padding-top:3px;">OOPS !! NO LESSON FOUND</h3>';
    echo '<h3 class="bg-dark  mt-3" style="margin-left:21%;height:44px;padding-left:40px;padding-top:3px;width:1020px;color:cornflowerblue"> OOPS !! NO LESSON FOUND</h3>';
    // echo '  <div class="add" style="    margin-left: 108%;
    // margin-top: 437px;
    // opacity: 5.98;">
    //     <a href="addLesson.php"><img
    //             src="https://img.icons8.com/external-flat-icons-inmotus-design/67/000000/external-add-tv-features-flat-icons-inmotus-design.png" /></a>
               
    // </div> ';

}


        }
    
    }}}
}

    if(isset($_POST['delete'])){
        // $sql = "DELETE FROM lesson where lesson_id = {$_POST['id']}";
        $sql = "DELETE FROM `lesson` WHERE `lesson`.`lesson_id` = {$_POST['id']}";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row == 0 ){
            echo '<h3 class="bg-dark text-white mt-3" style="margin-left:25%;height:40px;padding-left:40px;padding-top:3px">OOPS !! NO LESSON FOUND</h3>';
            }
            else{
    if($result){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    }else{
        echo "Unable to Delete Data";
    }

    }
}


 $sql = "SELECT * FROM `course` WHERE `course_id` = {$_POST['checkid']}";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
 if(isset($_POST['checkid']) && $row == 0 ){
    echo '<h3 class="bg-dark  mt-3" style="margin-left:25%;height:40px;padding-left:40px;padding-top:3px;color:#dc3545">OOPS <i class="fa fa-frown-o" aria-hidden="true"></i> ! NO DATA FOUND.</h3>';
}

?>
</div>

<?php

    // if(isset($_SESSION)){
        // session_start();
    // }
// if(isset($_SESSION['course_id'])){echo "hii";}
// else{

    // if(isset($_POST['checkid']) || $row > 0){
    // echo ' <div class="add" style="    margin-left: 88%;
    // margin-top: 732px;
    // opacity: 0.98;
    // user-select: auto;
    // position: absolute;">
    //     <a href="addLesson.php"><img
    //             src="https://img.icons8.com/external-flat-icons-inmotus-design/67/000000/external-add-tv-features-flat-icons-inmotus-design.png" /></a>

    // </div>';
// }

include("footer.php");

    ?>
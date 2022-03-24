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
    // include('header.php');
    // include('../adminDbConnection.php');
?>
<!--  course table start  -->
<div>
    <div class="coursetable2">
        List of
        Courses
    </div>
    <div class="table-responsive2">

<?php 
    $sql = "SELECT * FROM course";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0){
       
?>
        <table class="table">
            <thead>
            <tr>
         
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Teacher</th>
                <th scope="col" style="width: 156px;">Action</th>
               
                    </tr> 
            </thead>
            <tbody>
             <?php 
            //   while($row = mysqli_fetch_assoc($result)){
                while($row= mysqli_fetch_assoc($result)){
             
               echo '<tr>'; 
               echo '<th scope="row" data-label="courseid" style="height:30px">'.$row['course_id'].'</th>';
               echo '<td data-label="CourseName" style="height:30px">'.$row['course_name'].'</td>';
               echo '<td data-label="author" style="height:30px">'.$row['course_author'].'</td>';
               echo '<td data-label="action" style="display:flex;padding-left:27px;">'; 
                   
               echo '
               <form action="courseedit.php" method="POST" >
               <input type="hidden" name="id" value='.$row["course_id"].'>
               <button type="submit" id="edit"  name="edit"  value="edit">
                            <img src="dashimage/edit-solid.svg" alt="delete"
                             style="    height: 27px;
    width: 39px;padding: 3px 2px;"></button> </form>
    &nbsp;&nbsp;&nbsp;
    
                    <form action="#" method="POST">
                    <input type="hidden" name="course_delete_id" value='.$row["course_id"].' >
                    <button type="submit" name="delete" value="Delete"><img
                             src="dashimage/trash-can-solid.svg" alt="delete"
                             style="height: 27px;
                            width: 37px;
                            padding: 3px 1px;"></button>
                    </form>
              </td>
               </tr>';
                }
    ?>


                            
            </tbody>
        </table>
        <?php
    } 
    else{ 
        // echo "No Records";
    echo '<h3 class="bg-dark text-white mt-1" style="margin-left:0%;height:40px;padding-left:20px;padding-top:3px;width:370px">OOPS !! NO DATA FOUND</h3>';

    }
  
//   code for deleting
if(isset($_POST['delete'])){
    $sql =  "DELETE FROM `course` WHERE `course`.`course_id` = {$_POST['course_delete_id']}";
        $record= mysqli_query($conn,$sql);
        if($record){
        echo '<meta http-equiv="refresh" content="0;URL=?courseid=$"/>';
                    }
                    else{
        echo "unable to delete";
    }}

    // if(isset($_REQUEST['delete'])){
    //     // $sql = "DELETE  FROM course WHERE course_id = {$_POST['course_delete']}";
    //     $sql = "DELETE FROM `course` WHERE `course`.`course_id` = $_REQUEST['course_id']";
    //     $result = mysqli_query($conn,$sql);
    //     if($result){
    //         echo "<meta http-equiv='refresh' content='0;URL=?deleted' />";
    //     }
    //     else{
    //         echo "Unable to delete the record";
    //     }
    // }
         ?>


  
    </div>
    <div class="add" style="    margin-left: 91%;
    margin-top: 732px;
    opacity: 0.98;
    user-select: auto;
    position: absolute;">
  
       <!-- <button >  -->
            <a href="addCourse.php"><img
                src="https://img.icons8.com/external-flat-icons-inmotus-design/67/000000/external-add-tv-features-flat-icons-inmotus-design.png" /></a>
                <!-- <button> -->
    </div>
                <!-- <button type="submit" name="add" value="add" style="background-color:snow;border:none;margin-left: 91%;
    margin-top: 732px;
   
    user-select: auto;
    position: absolute;width:80px;height:80px">  <a class="add" ><img
                src="https://img.icons8.com/external-flat-icons-inmotus-design/67/000000/external-add-tv-features-flat-icons-inmotus-design.png" style="margin-left:-35px;margin-top:-20px"/></a>
                </button> -->
    <!-- </div> -->

    <!-- <form action="addCourse.php" method="POST">
                    <input type="hidden" name="adminid" value='$row["admin_id"]'>
                    <button type="submit" name="add" value="add" style="background-color:snow;border:none;margin-left: 91%;
    margin-top: 732px;
   
    user-select: auto;
    position: absolute;width:80px;height:80px">  <a class="add" ><img
                src="https://img.icons8.com/external-flat-icons-inmotus-design/67/000000/external-add-tv-features-flat-icons-inmotus-design.png" style="margin-left:-35px;margin-top:-20px"/></a>
                </button>
                    </form> -->
<!-- 
                    <form action="addCourse2.php" method="POST" >
               <input type="hidden" name="id2" value='.$row["admin_id"].'>
               <button type="submit" id="edit"  name="edit2"  value="edit2" style="    margin-left: 91%;
    margin-top: 732px;
    opacity: 0.98;
    user-select: auto;
    position: absolute;">
                            <img src="dashimage/edit-solid.svg" alt="delete"
                             style="    height: 27px;
    width: 39px;padding: 3px 2px;"></button> </form>
   
                     -->
                     
                  
         
          
                    </div>
<!--  course table start  -->

<!-- for adding course,building an icon-->

</div>
<?php
include('footer.php');
        
?>
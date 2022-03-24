<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include('header.php');
    include('../DbConnection.php');

// ADMIN SESSION
// fOR SECURITY PURPOSE WE WILL USE SESSION HERE

if(isset($_SESSION['is_admin_login'])){
        $adminEmail = $_SESSION['admin_email'];
    }
    else{
      echo "<script> loaction.href='..index.php' </script>";
    }
   
?>
<!--  course table start  -->
<div>
    <div class="coursetable2">
        List of
        Students
    </div>
    <div class="table-responsive2">

<?php 
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row > 0){
       
?>
        <table class="table">
            <thead>
            <tr>
         
                <th scope="col" style="width: 150px;">Student ID</th>
                <th scope="col">Name</th>
                <th scope="col">Student Email</th>
                <th scope="col" style="width: 90px;">Action</th>
               
                    </tr> 
            </thead>
            <tbody>

            
             <?php 
            //   while($row = mysqli_fetch_assoc($result)){
                while($row= mysqli_fetch_assoc($result)){
             
               echo '<tr>';
               echo '<th scope="row" data-label="studid" style="height:30px">'.$row['stud_id'].'</th>';
               echo '<td data-label="studName" style="height:30px">'.$row['stud_name'].'</td>';
               echo '<td data-label="studEmail" style="height:30px">'.$row['stud_email'].'</td>';
               echo '<td data-label="action" style="display:flex;padding-left:22px;">'; 
                   
               echo '
               
    
                    <form action="#" method="POST">
                    <input type="hidden" name="stud_delete_id" value='.$row["stud_id"].' >
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
    else{ echo "No Records";
    }
  
//   code for deleting
if(isset($_POST['delete'])){
    $sql =  "DELETE FROM `student` WHERE `student`.`stud_id` = {$_POST['stud_delete_id']}";
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
        <a href="addStudent.php"><img
                src="https://img.icons8.com/external-flat-icons-inmotus-design/67/000000/external-add-tv-features-flat-icons-inmotus-design.png" /></a>

    </div>

</div>
<!--  course table start  -->

<!-- for adding course,building an icon-->

</div>
<?php
include('footer.php');
        
?>
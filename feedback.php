<?php

if(!isset($_SESSION)){
    session_start();
}

include('header.php');
include('../adminDbConnection.php');
include('../DbConnection.php');
// if(isset($_SESSION['is_admin_login'])){
//     $adminEmail = $_SESSION['adminEmail'];
// }
// else{
//     echo "problem";
// }
?>



<div class="addCourse"
    style="    position: absolute;
margin-left: 20%;
margin-top: 5%;
width: 63%;
background: linear-gradient(126deg, #56b2b7, rgb(23, 109, 138));
border-radius: 50px;
height: 760px;
padding: 20px 30px;
box-shadow: rgb(0 0 0 / 0%) -3px -23px 27px 29px inset, rgb(0 8 0 / 23%) 105px 199px 129px 132px inset, rgb(23 109 134 / 97%) 0px -79px 106px 0px inset, rgb(162, 167, 165) 0px 0px 65px, rgba(22, 128, 189, 0.521) 0px 4px 96px, rgba(29, 106, 126, 0.54) 0px 3px 24px, rgb(0 0 0) 19px 15px 31px, rgb(0 0 0 / 24%) 0px 149px 84px;">
    <div class="title" style="text-align:center">
        <h1 style="color:snow;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">List of Feedback
        </h1>
    </div>
    
    <hr style="width: 99%;background-color: black;">
<?php
    $sql = "SELECT * FROM feedback";   
    $result = mysqli_query($conn , $sql);
    if(mysqli_num_rows($result) > 0 ){
        echo '<table class="table" style="width:98%">
        <thead>
        <tr>
        <th scope="col">Feedback ID </th>
        <th scope="col">Content </th>
        <th scope="col">Student ID </th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        </tbody>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<th scope="row">'.$row['f_id'].'</th>';
            echo '<td>'.$row['f_content'].'</td>';
            echo '<td>'.$row['stud_id'].'</td>';
            echo '<td><form action="" method="POST">
                <input type="hidden" name="id" value='.$row["f_id"].'>
                <button type="submit" class="btn btn-secondary" 
                name="delete" value="Delete"><i class="far fa-trash-alt"></i>
                </button>
                </form>
                </td>
            </tr>';
        }
        echo '</tbody></table>';
    } 
    else{
    echo '<h3 class="bg-dark  mt-3" style="margin-left:2%;height:40px;padding-left:40px;padding-top:3px;color:#dc3545">OOPS <i class="fa fa-frown-o" aria-hidden="true"></i> ! NO DATA HERE.</h3>';
    }
    
    if(isset($_POST['delete'])){
        $sql = "DELETE FROM feedback WHERE f_id = {$_POST['id']}";
        $result = mysqli_query($conn , $sql);
        if($result){
            // echo "Record Deleted Successfully";
            echo '<meta http-equiv="refresh" content="0,URL=?deleted"/>';
        }
        else{
            echo "Unable to Delete Data";
        }
    }
include('footer.php');
?>

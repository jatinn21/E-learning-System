<?php

if(!isset($_SESSION)){
    session_start();
}
include_once('../adminDbConnection.php');

// Admin Login Verification
if(!isset($_SESSION['is_admin_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['admin_email']) 
    && isset($_POST['admin_password'])){
        $admin_email = $_POST['admin_email'];
        $admin_password =  $_POST['admin_password'];
      
        $sql="SELECT admin_email , admin_password FROM `admin` WHERE `admin_email` LIKE '".$admin_email."' AND `admin_password` LIKE '".$admin_password."'";
                            
        $result =mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
      
        if($row === 1){
                     
            $_SESSION['is_admin_login']=true;       //this will help in storing the status of who are login 
            $_SESSION['admin_email']=$admin_email;   // this will help in for are a particular user status
            echo json_encode($row);
        }
        else if($row === 0 ){
            echo json_encode($row);
        }
    }
    }
?>
 
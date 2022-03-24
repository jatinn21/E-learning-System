<!-- admin login modal start -->
<!-- admin login modal start -->
<div class="modal" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="min-width:600px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: rgba(1, 39, 66, 0.8);font-weight:900;font-family: PT Serif, serif;
               font-family: Ubuntu, sans-serif;">
                    Admin Login </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- login form start -->
                <form style="background-color: rgba(255, 255, 255, 0.596) !important ;" action="adminlogin.php" method="post">


                    <div class="mb-3 ml-9 mb-1  adminform">
                        <label for="exampleInputEmail1" class="form-label"
                            style="color: rgba(27, 59, 82, 0.8);font-weight:700">
                            <img src="img/envelope.svg"
                                style=" left:8% ;top: -105%;height:22px; width:37px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Email
                        </label>
                        <input type="email" class="admin_form" id="admin_email" name="admin_email" required="required">
                    </div>

                    <div class="mb-1 adminform">
                        <label for="exampleInputPassword1" class="form-label"
                            style="color:rgba(27, 59, 82, 0.8);font-weight: 700;">
                            <img src="img/key.svg"
                                style=" left:4% ;top :-91%;height:22px; width:35px; border-radius: 90%;position: relative;margin-bottom: 1px;">
                            Password</label>
                        <input type="password" class="form" id="admin_password" name="admin_password" required="required">
                    </div>
                    <div id="emailHelp" class="form-text" style="padding-left: 10px;"> <small>*<strong>Only for
                                Admin</strong>*</div><br>

                    <button type="submit" class="adminloginsubmit" id="admin_submit" name="admin_submit" style=" background-color: rgb(20, 72, 109);
                   width: 123px;
                   font-size: 21px;
                   user-select: auto;
                   border-radius: 10px;
                   color: white;
                   border: solid 3px rgba(20,79,122,0.8);
                   font-family:   Ubuntu, sans-serif;
                   transition: .75s;">Submit</button>
                    <br>

                </form>

                <!-- adminlogin form end -->
            </div>

        </div>
    </div>
</div>


<!-- admin login modal end -->


<!-- !-- < Jquery and Bootstrap Javacsript --> 

<script src=" js/jquery.min.js">
</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Font-Awesome JS -->
<script src="js/all.min.js"></script>

<!-- For Login Category -->
<script src="js/loginsubmit.js"></script>
<script type = "text/javascript">  
// function navigate(){  

// window.location = "http://localhost/ischool/admin/courseedit.php";  

// }  
// </script>

<!-- Modal -->




</body>

</html>
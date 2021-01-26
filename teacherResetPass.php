<?php

    require 'teacherdashboard_header.php';
    require 'models/db_connect.php';

    $supTeacher = $_COOKIE["teacherID"];

    $hasErr=false;

    if(isset($_POST["changePass"]))
    {
        if(empty($_POST["newPass"]))
        {
            echo "Field not be empty";
            $hasErr=true;
        }
        else if(empty($_POST["rePass"]))
        {
            echo "Field not be empty";
            $hasErr=true;
        }
        if(!$hasErr)
        {
             $pass = $_POST["newPass"];
             //$pass = md5($pass);
            $sql = "UPDATE teacher SET password = '$pass' WHERE t_id = '$supTeacher'";
            execute($sql);
        }
    }

?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            

           


            <h3>Chnage Password <?php echo $supTeacher?></h3>

           

            <!---<input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br>--->
           

             


             <form action="" method="POST" onsubmit="return validateNewPass()">


            <!--   <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Enter old Password</span>
                </div>
                <input type="text" onfocusout="oldPass()" name="oldPass" id="oldPass" class="form-control" placeholder="old Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <span id="sms">Hello</span>

-->

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Enter New Password</span>
                </div>
                <input type="text" name="newPass" id="newPass" class="form-control" placeholder="New Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>





                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Re-enter Password</span>
                </div>
                <input type="text" name="rePass" id="rePass" class="form-control" placeholder="Re-enter Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>





                <button type="submit" name="changePass" class="btn btn-secondary" style="float: right; padding-left:5%">Change</button>



            </form>


















          </main> <!--##### End of Main #######----->















<script src="jsMy/adminResetPass_validate.js"></script>



<?php

    require 'adminfooter.php';

?>
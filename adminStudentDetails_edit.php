<?php 
    require 'adminHeadNav.php';
    require  'Control/adminStudentDetails_controller.php';
    //require 'models/db_connect.php';
   

    $c_id = $_REQUEST["id"];

    $query = "select s_id,Name, Gender, Father_Name, Mother_Name, email, f_phone, m_phone, country, birth_id ,password from student where s_id = '$c_id'";

    $myArrr = getArray($query);
    foreach($myArrr as $myArr)
    {

    

///////////////////////////////////////////////////////////////////////////////////////////////


    
?>


           <!--/////////---Main--/////////--->
           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            
            <!----#### Code Start here -->
            <h1>Student Profile Edit</h1>


        <form action="" method="POST">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">ID</span>
            </div>
            <input type="text" name="id" class="form-control"  value="<?php echo $myArr["s_id"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            <input type="text" name="name" class="form-control" value="<?php echo $myArr["Name"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Gender</span>
            </div>
            <input type="text" name="gender" class="form-control" value="<?php echo $myArr["Gender"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!----****--->

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Father Name</span>
            </div>
            <input type="text" name="fname" class="form-control" value="<?php echo $myArr["Father_Name"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!----****--->

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Mother Name</span>
            </div>
            <input type="text" name="mname" class="form-control" value="<?php echo $myArr["Mother_Name"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!----****--->

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input type="text" name="email" class="form-control" value="<?php echo $myArr["email"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!----****--->

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Father Phone</span>
            </div>
            <input type="text" name="fphn" class="form-control" value="<?php echo $myArr["f_phone"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!----****--->

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Father Phone</span>
            </div>
            <input type="text" name="mphn" class="form-control" value="<?php echo $myArr["m_phone"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!----****--->

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Country</span>
            </div>
            <input type="text" name="country" class="form-control" value="<?php echo $myArr["country"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!----****--->

            

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Birth Certificate </span>
            </div>
            <input type="text" name="birth_id" class="form-control" value="<?php echo $myArr["birth_id"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
                    
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="text" name="pass" class="form-control"  value="<?php echo $myArr["password"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>

    <?php }?>

            <button type="submit" name="edit_student" class="btn btn-success" style="float: right; margin-right:50%">Edit</button>



        </form>


            



          </main> <!--##### End of Main #######----->


<?php

    require 'adminfooter.php';

?>
<?php 
    require 'adminHeadNav.php';
    require  'Control/adminTeacherDetails_controller.php';
    //require 'models/db_connect.php';
   

    $c_id = $_REQUEST["id"];

    $query = "select  t_id,Name, Gender, Father_Name, Mother_Name, email, phone,country,nid,password from teacher where t_id = '$c_id'";

    $myArrr = getArray($query);
    foreach($myArrr as $myArr)
    {

    

///////////////////////////////////////////////////////////////////////////////////////////////


    
?>


           <!--/////////---Main--/////////--->
           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            
            <!----#### Code Start here -->
            <h1>Teacher Profile Edit</h1>


        <form action="" method="POST">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">ID</span>
            </div>
            <input type="text" name="id" class="form-control"  value="<?php echo $myArr["t_id"];?>"  aria-label="Username" aria-describedby="basic-addon1">
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
                <span class="input-group-text" id="basic-addon1">Phone</span>
            </div>
            <input type="text" name="phn" class="form-control" value="<?php echo $myArr["phone"];?>"  aria-label="Username" aria-describedby="basic-addon1">
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
                <span class="input-group-text" id="basic-addon1">National ID</span>
            </div>
            <input type="text" name="nid" class="form-control" value="<?php echo $myArr["nid"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>
                    
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="text" name="pass" class="form-control"  value="<?php echo $myArr["password"];?>"  aria-label="Username" aria-describedby="basic-addon1">
            </div>

    <?php }?>

            <button type="submit" name="edit_teacher" class="btn btn-success" style="float: right; margin-right:50%">Edit</button>



        </form>


            



          </main> <!--##### End of Main #######----->


<?php

    require 'adminfooter.php';

?>
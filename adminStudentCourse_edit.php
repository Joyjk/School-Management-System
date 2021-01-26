<?php 
    require 'adminHeadNav.php';
    require  'Control/adminCourseAdd_ctrl.php';
    //require 'models/db_connect.php';
   

    $cat_id = $_REQUEST["id"];

    $query = "select s_id,Name, c_id1, c_id2, c_id3, c_id4 from student where s_id = '$cat_id'";

    $myArrr = getArray($query);
    foreach($myArrr as $myArr)
    {

    

///////////////////////////////////////////////////////////////////////////////////////////////


    
?>


           <!--/////////---Main--/////////--->
           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            
            <!----#### Code Start here -->
            <h1>Add Course to Student</h1>


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

           
            <!------------------->
            
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="course1">
                <option selected>Choose...</option>
                <?php 
                            $sql4 = "SELECT c_id,Name from course";

                            $result4 = getArray($sql4);

                            foreach($result4 as $res4)
                            {
                                echo "<option value='".$res4["c_id"]."'>".$res4["Name"]."</option>";
                            }
                ?>
            </select>
            </div>

            <!---%%%%%%%---->
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="course2">
                <option selected>Choose...</option>
                <?php 
                            $sql4 = "SELECT c_id,Name from course";

                            $result4 = getArray($sql4);

                            foreach($result4 as $res4)
                            {
                                echo "<option value='".$res4["c_id"]."'>".$res4["Name"]."</option>";
                            }
                ?>
            </select>
            </div>


            <!---%%%%%%%---->

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="course3">
                <option selected>Choose...</option>
                <?php 
                            $sql4 = "SELECT c_id,Name from course";

                            $result4 = getArray($sql4);

                            foreach($result4 as $res4)
                            {
                                echo "<option value='".$res4["c_id"]."'>".$res4["Name"]."</option>";
                            }
                ?>
            </select>
            </div>
            <!---%%%%%%%---->


                        
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="course4">
                <option selected>Choose...</option>
                <?php 
                            $sql4 = "SELECT c_id,Name from course";

                            $result4 = getArray($sql4);

                            foreach($result4 as $res4)
                            {
                                echo "<option value='".$res4["c_id"]."'>".$res4["Name"]."</option>";
                            }
                ?>
            </select>
            </div>



    <?php }?>

            <button type="submit" name="add_course" class="btn btn-success" style="float: right; margin-right:50%">Edit</button>



        </form>


            



          </main> <!--##### End of Main #######----->


<?php

    require 'adminfooter.php';

?>
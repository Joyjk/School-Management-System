<?php
    require 'teacherdashboard_header.php';

    //require 'models/db_connect.php';

    require 'Control/teacherdashboard_ctlr_notice.php';


    



    $supTeacher = $_COOKIE["teacherID"];

    //$supTeacher = '19_23454';

    /*if(isset($_POST["notice"]))
    {
        $name = $_POST["name"];
        $id = $_POST["id"];
        $c_id = $_POST["c_id"];
        $t_id = $_POST["t_id"];
        $details = $_POST["details"];

        $query = "INSERT INTO notice (ID,Name,About,t_id,c_id) VALUES ('$id','$name','$details','$t_id','$c_id')";
        execute($query);

    }
    */


    


?>


    <main >

        <span class="d-block p-2 bg-dark text-white" style="text-align: center;"> Notice</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin: 5em 10em 10em 20em;">

    <form action="" method="POST" onsubmit="return validate1()">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Course</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="c_id">
                <option value="" selected>Choose...</option>
                <?php 
                        
                    $sql = "SELECT c_id,Name FROM course WHERE t_id = '$supTeacher'";

                    $result = getArray($sql);

                    foreach($result as $res)
                    {
                        echo "<option value='".$res["c_id"]."'>".$res["Name"]."</option>";
                    }
                ?>
                
            </select>
        </div>

        
               <input type="hidden" value="<?php echo $supTeacher?>" id="t_id" name="t_id">
                
         <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">ID</span>
                </div>
                <input type="text" name="id" class="form-control" placeholder=" Unique ID" aria-label="Username" aria-describedby="basic-addon1" id="id" >
                
        </div>
        
        

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">About</span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" id="name" >
                
        </div>
        <span id="errName"></span>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Details</span>
            </div>
            <textarea class="form-control" name="details" aria-label="With textarea" id="details"></textarea>
         </div>


         <button type="submit" name="notice" class="btn btn-dark" style="margin-left:48em; margin-top:1em;">Post</button>
    </form>
       


        </div>



    </main>

    <script src="jsMy/teacherNotice_validation.js"></script>

<?php
    require 'teacherdashboard_footer.php';
?>
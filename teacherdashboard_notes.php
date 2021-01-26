<?php
    require 'teacherdashboard_header.php';
    require 'models/db_connect.php';


  /*  if(!isset($_COOKIE["teacherID"]))
    {
      echo '<script>window.location.href = "login.php"</script>';
    } */

    $supTeacher = $_COOKIE["teacherID"];

    if(isset($_POST["upload"]))
    {
        $target_dir = "file/";
        $target_file = $target_dir . basename($_FILES["mfile"]["name"]);
        move_uploaded_file($_FILES["mfile"]["tmp_name"],$target_file);


        insertNote($_POST["id"],$_POST["name"],$target_file,$_POST["c_id"],$_POST["t_id"]);
    }

    function insertNote($id,$name,$file,$c_id,$t_id)
    {
        $query = "INSERT INTO notes (notes_id,about,path,t_id,c_id) VALUES('$id','$name','$file','$t_id','$c_id')";

        //echo $query;
        execute($query);

        echo "Done";


    }

?>




    <main >

        <span class="d-block p-2 bg-dark text-white" style="text-align: center;"> Notes</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin: 5em 10em 10em 20em;">

    <form method="POST" enctype="multipart/form-data" onsubmit="return validateNotes()">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Course</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="c_id">
                <option selected>Choose...</option>
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


        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">ID</span>
                </div>
                <input type="text" id="id" name="id" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1">
                
        </div>
        <span >Hello error</span>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" id="name" name="name" class="form-control" placeholder="File Name" aria-label="Username" aria-describedby="basic-addon1">
        </div>


        <input type="hidden" name="t_id" value="<?php echo $supTeacher?>">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="mfile" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
         </div>


         <button type="submit" name="upload" class="btn btn-dark" style="margin-left:48.5em; margin-top:0.5em; padding-left:2em;">Post</button>
    </form>

        </div>



    </main>
    <script src="jsMy/teacherNotes_validate.js"></script>

<?php
    require 'teacherdashboard_footer.php';
?>
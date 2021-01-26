<?php
    require 'models/db_connect.php';
    if(isset($_POST["add_course"]))
    {
        //update teacher details
        updateCourse($_POST["id"],$_POST["course1"],$_POST["course2"],$_POST["course3"],$_POST["course4"]);
    }






    function updateCourse($id,$c1,$c2,$c3,$c4)
    {
        $myQuery="update student SET c_id1='$c1', c_id2 = '$c2',c_id3 = '$c3', c_id4 = '$c4' WHERE s_id ='$id' ";

        execute($myQuery);
        //header('Location: adminTeacherDetails.php');
        echo "<script>window.location.href='adminStudentCourse_Assign.php';</script>";
    }


?>
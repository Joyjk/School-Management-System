<?php
    require 'models/db_connect.php';
    if(isset($_POST["edit_teacher"]))
    {
        //update teacher details
        updateTeacher($_POST["id"],$_POST["name"],$_POST["gender"],$_POST["fname"],$_POST["mname"],$_POST["email"],$_POST["phn"],$_POST["country"],$_POST["nid"],$_POST["pass"]);
    }






    function updateTeacher($id,$name,$gender,$fname,$mname,$email,$phn,$country,$nid,$pass)
    {
        $myQuery="update teacher SET Name='$name', Gender = '$gender',Father_Name = '$fname',Mother_Name = '$mname',email= '$email', phone = '$phn', country ='$country',nid = '$nid' ,password = '$pass' WHERE t_id ='$id' ";

        execute($myQuery);
        //header('Location: adminTeacherDetails.php');
        echo "<script>window.location.href='adminTeacherDetails.php';</script>";
    }


?>
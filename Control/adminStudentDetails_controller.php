<?php
    require 'models/db_connect.php';
    if(isset($_POST["edit_student"]))
    {
        //update student details
        //updateStudent($_POST["id"],$_POST["name"],$_POST["gender"],$_POST["fname"],$_POST["mname"],$_POST["email"],$_POST["fphn"],$_POST["mphn"],$_POST["country"],$_POST["birth_id"],$_POST["pass"]);
        updateStudent($_POST["id"],$_POST["name"],$_POST["gender"]);
    }






    //function updateStudent($id,$name,$gender,$fname,$mname,$email,$fphn,$mphn,$country,$birthid,$pass)
    function updateStudent($id,$name,$gender)
    {
        //$myQuery1="UPDATE student SET Name='$name', Gender = '$gender',Father_Name ='$fname', Mother_Name = '$mname',email= '$email', f_phone = '$fphn',m_phn = '$mphn', country ='$country',birth_id = '$birthid' ,password = '$pass'  WHERE s_id ='$id' ";

        ///echo "$myQuery1";

        $sql = "UPDATE student SET Name = '$name', Gender = '$gender' WHERE s_id = '$id'";

        execute($sql);

        //execute($myQuery1);
        //header('Location: adminTeacherDetails.php');
       echo "<script>window.location.href='adminStudentDetails.php';</script>";
    }


?>
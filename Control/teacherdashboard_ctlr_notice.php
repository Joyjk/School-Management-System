<?php 
    require 'models/db_connect.php';

    if(isset($_POST["notice"]))
    {
        $about = $_POST["name"];
        $id = $_POST["id"];
        $c_id = $_POST["c_id"];
        $t_id = $_POST["t_id"];
        $details = $_POST["details"];
        
        $query = "INSERT INTO notice (notice_id,about,details,t_id,c_id) VALUES ('$id','$about','$details','$t_id','$c_id')";
        execute($query);


        echo "Done";

    }









?>
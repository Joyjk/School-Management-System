<?php
    require 'models/db_connect.php';
    //require '';



    function userExistence($username)
    {
        $query = "select s_id from student WHERE s_id = '$username'";
        $user = getArray($query);
        return count($user);
    }

?>
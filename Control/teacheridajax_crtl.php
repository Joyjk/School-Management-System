<?php
    require 'models/db_connect.php';
    //require '';



    function userExistence($username)
    {
        $query = "select t_id from teacher WHERE t_id = '$username'";
        $user = getArray($query);
        return count($user);
    }

?>
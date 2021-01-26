<?php

require 'models/db_connect.php';
//require '';



function userExistence($username)
{
    $query = "select c_id from course WHERE c_id = '$username'";
    $user = getArray($query);
    return count($user);
}



?>
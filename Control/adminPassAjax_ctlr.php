<?php

require 'models/db_connect.php';
//require '';



function userExistence($pass)
{
    $query = "select password from admin WHERE password = '$pass'";
    $user = getArray($query);
    return count($user);
}



?>
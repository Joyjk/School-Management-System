<?php


    require "Control/teacheridajax_crtl.php";

    if(isset($_GET["id"]))
    {
        if(userExistence($_GET["id"]))
        {
            //echo "user exesting Already";
            echo "true";
        }
        else
        {
            //echo "user name valid";
            echo "false";
        }
    }











?>
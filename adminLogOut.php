<?php

session_start();
if(isset($_SESSION["adminID"]))
{
    session_destroy();
    echo '<script>window.location.href = "login.php"</script>';
}



?>
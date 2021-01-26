<?php
    require 'models/db_connect.php';
    $sid = $_REQUEST["id"];

    $myQ = "DELETE FROM student WHERE s_id = '$sid'";
    execute($myQ);

    echo '<script>window.location.href = "adminStudentDetails.php"</script>';

?>
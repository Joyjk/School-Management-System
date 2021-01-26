<?php
    require 'models/db_connect.php';
    $cid = $_REQUEST["id"];

    $myQ = "DELETE FROM course WHERE c_id = '$cid'";
    execute($myQ);

    echo '<script>window.location.href = "adminCourseDetails.php"</script>';

?>
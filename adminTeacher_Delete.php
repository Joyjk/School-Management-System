<?php
    require 'models/db_connect.php';
    $tid = $_REQUEST["id"];

    $myQQ = "DELETE FROM teacher WHERE t_id = '$tid'";
    execute($myQQ);

    echo '<script>window.location.href = "adminTeacherDetails.php"</script>';

?>
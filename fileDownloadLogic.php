<?php
    include 'models/db_connect.php';



    if(isset($_GET["id"]))
    {
        $gid = $_GET["id"];

        $sql1 = "SELECT * FROM notes WHERE notes_id = '$gid' ";

        //$filepath = "";

        $res1 = getArray($sql1);

        //$filepath = 'file/ '
        foreach ($res1 as $result1)
        {
            $filepath = $result1["path"];
        }

        
    }

    //echo "$res";
    if(file_exists($filepath))
    {
        header('Content-Type: application/octet-stream');
        
        header('Content-Description: File Transfer');

        header('Content-Disposition: attachment; filename ='. basename($filepath));

        header('Expires: 0');

        header('Cache-Control: must-revalidate');

        header('Pragma: public');

        header('Content-Length:'. filesize($filepath));

        readfile($filepath);



    }
   

?>
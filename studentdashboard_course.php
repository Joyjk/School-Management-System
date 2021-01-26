
<?php
    
require 'studentdashboard_headNav.php';
include 'models/db_connect.php';



/*if(!isset($_COOKIE["studentID"]))
{
    echo '<script>window.location.href = "login.php"</script>';
}
*/    
$super_student = $_COOKIE["studentID"];
//$super_student = "181-25689";

    




?>




    <main >

        <span class="d-block p-2 bg-danger text-white" style="text-align: center;"> Courses</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:20%; margin-right:20%;">


            
        <table border="1" style="border-collapse:collapse" class="table table-bordered">
                
                <thead>
                    <tr>
                        <th>Courses</th>
                        
                        
                        
                        
    
    
                    </tr>
                </thead>    
    
                <tbody id="myTable">
                    <?php
                    

                    $myquery = "SELECT student.c_id1 cid1, student.c_id2 cid2,student.c_id3 cid3,student.c_id4 cid4 FROM student WHERE student.s_id = '$super_student'";

                    $result = getArray($myquery);



                    foreach($result as $row)
                    {

                        $cid1 = $row["cid1"];
                        $cid2 = $row["cid2"];
                        $cid3 = $row["cid3"];
                        $cid4 = $row["cid4"];

                   

                    }

                    $sql12 = "SELECT c_id, Name, t_id FROM course WHERE c_id = '$cid1'";
                    $result12 = getArray($sql12);
                    echo "<tr>";
                    foreach($result12 as $res12)
                    {
                        //echo "<td>".$res12["Name"]."</td>";
                        //echo '<td> <a href = "studentCourseDevider.php?id='.$row["notes_id"].'">Download</a></td>';
                        echo '<td> <a href = "studentCourseDevider.php?id='.$res12["c_id"].'&name='.$res12["Name"].'&tt_id='.$res12["t_id"].'">'.$res12["Name"].'</a></td>';
                    }

                    $sql13 = "SELECT c_id, Name, t_id FROM course WHERE c_id = '$cid2'";
                    $result13 = getArray($sql13);
                    echo "<tr>";
                    foreach($result13 as $res13)
                    {
                        //echo "<td>".$res13["Name"]."</td>";
                        echo '<td> <a href = "studentCourseDevider.php?id='.$res13["c_id"].'&name='.$res13["Name"].'&tt_id='.$res13["t_id"].'">'.$res13["Name"].'</a></td>';
                    }



                    $sql14 = "SELECT c_id, Name, t_id FROM course WHERE c_id = '$cid3'";
                    $result14 = getArray($sql14);
                    echo "<tr>";
                    foreach($result14 as $res14)
                    {
                        //echo "<td>".$res14["Name"]."</td>";
                        echo '<td> <a href = "studentCourseDevider.php?id='.$res14["c_id"].'&name='.$res14["Name"].'&tt_id='.$res14["t_id"].'">'.$res14["Name"].'</a></td>';
                    }


                    $sql15 = "SELECT c_id, Name, t_id FROM course WHERE c_id = '$cid4'";
                    $result15 = getArray($sql15);
                    echo "<tr>";
                    foreach($result15 as $res15)
                    {
                        //echo "<td>".$res15["Name"]."</td>";
                        echo '<td> <a href = "studentCourseDevider.php?id='.$res15["c_id"].'&name='.$res15["Name"].'&tt_id='.$res15["t_id"].'">'.$res15["Name"].'</a></td>';
                    }
                    //echo "<tr>";
                   // echo "<td>".$cid1."</td>";
                    
                    ///echo "<td>".$cid2."</td>";
                   // echo "<td>".$cid3."</td>";
                   // echo "<td>".$cid4."</td>";


                    
                    //echo '<td> <a href = "studentdashboard_notes_down.php?id='.$row["notes_id"].'">Download</a></td>';
                    echo "</tr>";










                    
                    ?>
    
                </tbody>
    
                 </table>
    
    
    



    <?php// }?>

                       

    <button style="margin-left:80%;" onclick="back11()">Go back</button>
                        



        </div>



    </main>


    <script>
        function back11()
        {
            window.location.replace("studentdashboard.php");
        }
    </script>
<?php
    require 'studentdashboard_footer.php';
?>





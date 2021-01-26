
<?php
    
    
    //include 'models/db_connect.php';
    $filepath = "";
    require 'fileDownloadLogic.php';
    require 'studentdashboard_headNav.php';
    

    $courseid = $_REQUEST["id"];


//  $n_id = $_REQUEST["id"];
 // $c_id = $_REQUEST["c_id"];

  //$query2 = "SELECT about, details from notice WHERE  notice_id = '$n_id'";

  //$myArrr = getArray($query2);
  //  foreach($myArrr as $myArr)
   // {

?>




    <main >

        <span class="d-block p-2 bg-danger text-white" style="text-align: center;"> Notes</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:20%; margin-right:20%;">


            
        <table border="1" style="border-collapse:collapse" class="table table-bordered">
                
                <thead>
                    <tr>
                        <th>About</th>
                        
                        <th>File</th>
                        <th>Upload date</th>
                        <th>Course ID</th>
                        <th>Download</th>
                        
                        
    
    
                    </tr>
                </thead>    
    
                <tbody id="myTable">
                    <?php
                    /*
                    foreach($result as $res)
                    {
                        echo "<tr>";
                        echo "<td>".$res["t_id"]."</td>";
                        echo "<td>".$res["Name"]."</td>";
                        echo "<td>".$res["Gender"]."</td>";
                        echo "<td>".$res["Father_Name"]."</td>";
                        echo "<td>".$res["Mother_Name"]."</td>";
                        echo "<td>".$res["email"]."</td>";
                        echo "<td>".$res["phone"]."</td>";
                        echo "<td>".$res["country"]."</td>";
                        echo "<td>".$res["nid"]."</td>";
                        echo "<td>".$res["password"]."</td>";
                        echo '<td><a href = "adminTeacherDetails_edit.php?id='.$res["t_id"].'" class="btn btn-warning">Edit</a></td>';
                        
                             //'echo <td><a href="editcategory.php?id='.$category["id"].'" class="btn btn-success">Edit</a></td>';
                        echo "<td>"."<a  class='btn btn-danger'>Delete</a>"."</td>";
                        echo "</tr>";
                    }
                    
                    */

                    $myquery = "SELECT notes_id,about,path,Date,t_id,c_id from notes WHERE c_id = '$courseid'";

                    $result = getArray($myquery);



                    foreach($result as $row)
                    {

                    echo "<tr>";
                    echo "<td>".$row["about"]."</td>";
                    
                    echo "<td>".$row["path"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["c_id"]."</td>";
                    echo '<td> <a href = "studentdashboard_notes_down.php?id='.$row["notes_id"].'">Download</a></td>';
                    echo "</tr>";

                    }













                    
                    ?>
    
                </tbody>
    
                 </table>
    
    
    



    <?php// }?>

                       

    <button style="margin-left:80%;" onclick="back()">Go back</button>
                        



        </div>



    </main>


    <script>
        function back()
        {
            window.location.replace("studentdashboard.php");
        }
    </script>
<?php
    require 'studentdashboard_footer.php';
?>





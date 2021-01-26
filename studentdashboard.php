<?php
    require 'studentdashboard_headNav.php';

    require 'models/db_connect.php';

   /* if(!isset($_COOKIE["studentID"]))
    {
      echo '<script>window.location.href = "login.php"</script>';
    }
    */
    $super_student = $_COOKIE["studentID"];

    $qus111 = "SELECT c_id1,c_id2,c_id3,c_id4 FROM student WHERE s_id = '$super_student'";
    $ans = getArray($qus111);
    foreach($ans as $val)
    {
      $course1 = $val["c_id1"];
      $course2 = $val["c_id2"];
      $course3 = $val["c_id3"];
      $course4 = $val["c_id4"];
    }


?>




    <main >

        <span class="d-block p-2 bg-danger text-white" style="text-align: center;"> Class Routine</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded">


            <table class="table text-center">
                <thead>
                  <tr>
                    
                    
                    <th scope="col">Day</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Time</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        
                        <td>Sunday</td>
                        
                        <?php 
                        $sql1 = "SELECT Name FROM course WHERE  c_id = '$course1'";
                        $result1 = getArray($sql1);
                        foreach($result1 as $rs1)
                        {
                          echo '<td>'.$rs1["Name"].'</td>';
                        }
                        
                        ?>
                        <td>08:00-10:00</td>
                     </tr>  
                  <tr>
                    
                    <td>Monday</td>
                    
                    <?php 
                        $sql2 = "SELECT Name FROM course WHERE  c_id = '$course2'";
                        $result2 = getArray($sql2);
                        foreach($result2 as $rs2)
                        {
                          echo '<td>'.$rs2["Name"].'</td>';
                        }
                        
                        ?>

                    <td>10:00-11:00</td>
                  </tr>
                  <tr>
                    
                    
                    <td>Tuesday</td>
                    <?php 
                        $sql3 = "SELECT Name FROM course WHERE  c_id = '$course3'";
                        $result3 = getArray($sql3);
                        foreach($result3 as $rs3)
                        {
                          echo '<td>'.$rs3["Name"].'</td>';
                        }
                        
                        ?>
                    
                    <td>11.00:00-12:00</td>
                  </tr>
                  <tr>
                    
                    
                    <td>Wednesday</td>
                    <?php 
                        $sql4 = "SELECT Name FROM course WHERE  c_id = '$course4'";
                        $result4 = getArray($sql4);
                        foreach($result4 as $rs4)
                        {
                          echo '<td>'.$rs4["Name"].'</td>';
                        }
                        
                        ?>
                    
                    <td>12:30-14:00</td>
                  </tr>
                </tbody>
              </table>




        </div>



    </main>

<?php
    require 'studentdashboard_footer.php';
?>
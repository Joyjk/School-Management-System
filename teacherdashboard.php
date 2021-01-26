<?php
    require 'teacherdashboard_header.php';
    require 'models/db_connect.php';
    $superTeacher = $_COOKIE["teacherID"];

   $qus = "SELECT * FROM course WHERE t_id = '$superTeacher'";
   $ans = getArray($qus);

    
?>




    <main >

        <span class="d-block p-2 bg-dark text-white" style="text-align: center;"> Class Timeing  </span>
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
                    
                <?php 

                $cnt = 0;
                            foreach($ans as $an)
                            {
                  echo  "<tr>";
                        if($cnt==0)
                        {
                          echo'<td>Sunday</td>';
                        }
                        else if($cnt==1)
                        {
                          echo'<td>Monday</td>';
                        }
                        else if($cnt==2)
                        {
                          echo'<td>Tuesday</td>';
                        }
                        else if($cnt==3)
                        {
                          echo'<td>Wednesday</td>';
                        }
                        
                       
                        
                              echo '<td>'.$an["Name"].'</td>';
                              $cnt++;  
                        echo'<td>08:00-10:00</td>';
                    echo' </tr>';
                        
                    }

                    ?>

                  <!--<tr>
                    
                    <td>Sunday</td>
                    <td>Physics</td
                    <td>08:00-10:00</td>
                  </tr>
                  <tr>-->
                    
                    
                    <!--<td>Sunday</td>
                    <td>Mathematics</td>
                    <td>10.30:00-12:00</td>
                  </tr>
                  <tr>
                    
                    
                    <td>Sunday</td>
                    <td>Engilsh</td>
                    <td>12:30-14:00</td>
                  </tr>-->
                </tbody>
              </table>




        </div>



    </main>

<?php
    require 'teacherdashboard_footer.php';
?>
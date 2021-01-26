<?php
    require 'studentdashboard_headNav.php';
    require 'models/db_connect.php';

    //$getc = 'Bio101';
    $getc = $_REQUEST["id"];

    $query = "SELECT notice_id, about,t_id,c_id from notice WHERE c_id = '$getc'";
    $result = getArray($query);



    

 

?>




    <main >

        <span class="d-block p-2 bg-danger text-white" style="text-align: center;"> Notice</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded">


            <table class="table text-center">
                <thead>
                  <tr>
                    
                    <th scope="col">About</th>
                    
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    
                        foreach($result as $res)
                        {
                            echo "<tr>";
                           // echo "<td>".$res["Name"]."</td>";
                           echo '<td><a  class="btn btn-primary" href = "studentdashboard_notice_board.php?id='.$res["notice_id"].'&c_id='.$res["c_id"].'" >'.$res["about"].'</a></td>';


                            echo "</tr>";
                   
                        }
                     ?>
                   <!--- <tr>
                       
                   <button type="button" class="btn dropdown-item btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Change Password</button>     

                    <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#staticBackdrop">
                        My class
                    </button></td>
                        
                     </tr>  --->
                  

                 
                </tbody>
              </table>


            <!---**********----->

                       

            
                        



        </div>



    </main>

<?php
    require 'studentdashboard_footer.php';
?>
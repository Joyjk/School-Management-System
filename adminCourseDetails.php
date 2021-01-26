<?php 
    require 'adminHeadNav.php';
    require 'models/db_connect.php';

?>


           <!--/////////---Main--/////////--->
           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            

           


            <h3>Course Details</h3>

            <?php ////Database Query
                $query = "SELECT course.c_id cid, course.Name cname, course.t_id tid, teacher.name tname FROM course,teacher WHERE course.t_id = teacher.t_id;";
                $result = getArray($query);

            ?>

            <!---<input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br>--->
            <table border="1" style="border-collapse:collapse" class="table table-bordered">
                
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Teacher Name</th>
                    <th>Teacher ID</th>
                   
                    
                    <th>Delete</th>
                    <!--<th>Delete</th>-->


                </tr>
            </thead>    

            <tbody id="myTable">
                <?php
                foreach($result as $res)
                {
                    echo "<tr>";
                    echo "<td>".$res["cid"]."</td>";
                    echo "<td>".$res["cname"]."</td>";
                    echo "<td>".$res["tname"]."</td>";
                    echo "<td>".$res["tid"]."</td>";
                   
                   // echo '<td><a href = "adminStudentDetails_edit.php?id='.$res["s_id"].'" class="btn btn-warning">Edit</a></td>';
                    echo '<td><a href = "adminCourse_Delete.php?id='.$res["cid"].'" class="btn btn-danger">Delete</a></td>';
                    
                         //'echo <td><a href="editcategory.php?id='.$category["id"].'" class="btn btn-success">Edit</a></td>';
                    //echo "<td>"."<a  class='btn btn-danger'>Delete</a>"."</td>";
                    echo "</tr>";
                }
                
                
                
                ?>

            </tbody>

             </table>



          </main> <!--##### End of Main #######----->


<?php

    require 'adminfooter.php';

?>
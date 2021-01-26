<?php 
    require 'adminHeadNav.php';
    require 'models/db_connect.php';

?>


           <!--/////////---Main--/////////--->
           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            

           


            <h3>Student's Details</h3>

            <?php ////Database Query
                $query = "select s_id,Name,c_id1,c_id2,c_id3,c_id4  from student";
                $result = getArray($query);

            ?>

            <!---<input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br>--->
            <table border="1" style="border-collapse:collapse" class="table table-bordered">
                
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course 1</th>
                    <th>Course 2</th>
                    <th>Course 3</th>
                    <th>Course 4</th>
                    
                    <th>Add Course</th>
                    <!--<th>Edit Course</th>-->


                </tr>
            </thead>    

            <tbody id="myTable">
                <?php
                foreach($result as $res)
                {
                    echo "<tr>";
                    echo "<td>".$res["s_id"]."</td>";
                    echo "<td>".$res["Name"]."</td>";
                    echo "<td>".$res["c_id1"]."</td>";
                    echo "<td>".$res["c_id2"]."</td>";
                    echo "<td>".$res["c_id3"]."</td>";
                    echo "<td>".$res["c_id4"]."</td>";
                    
                    echo '<td><a href = "adminStudentCourse_edit.php?id='.$res["s_id"].'" class="btn btn-warning">Add Course</a></td>';
                    
                         //'echo <td><a href="editcategory.php?id='.$category["id"].'" class="btn btn-success">Edit</a></td>';
                   // echo "<td>"."<a  class='btn btn-danger'>Delete</a>"."</td>";
                    echo "</tr>";
                }
                
                
                
                ?>

            </tbody>

             </table>



          </main> <!--##### End of Main #######----->


<?php

    require 'adminfooter.php';

?>
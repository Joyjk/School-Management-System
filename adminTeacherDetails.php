<?php 
    require 'adminHeadNav.php';
    require 'models/db_connect.php';

?>


           <!--/////////---Main--/////////--->
           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            

           


            <h3>Teacher's Details</h3>

            <?php ////Database Query
                $query = "select t_id,Name, Gender, Father_Name, Mother_Name, email, phone,country,nid,password from teacher";
                $result = getArray($query);

            ?>

            <!---<input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br>--->
            <table border="1" style="border-collapse:collapse" class="table table-bordered">
                
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Father name</th>
                    <th>Mother Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>National ID</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>


                </tr>
            </thead>    

            <tbody id="myTable">
                <?php
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
                    //echo "<td>"."<a  class='btn btn-danger'>Delete</a>"."</td>";
                    echo '<td><a  href = "adminTeacher_Delete.php?id='.$res["t_id"].'" class="btn btn-danger">Delete</a></td>';
                    echo "</tr>";
                }
                
                
                
                ?>

            </tbody>

             </table>



          </main> <!--##### End of Main #######----->


<?php

    require 'adminfooter.php';

?>
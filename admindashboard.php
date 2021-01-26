<?php 
    require 'adminHeadNav.php';
    $superAdmin = $_SESSION["adminID"];
    require 'models/db_connect.php';

    $query = "SELECT COUNT(*) num FROM student";
    $res = getArray($query);
    foreach($res as $rs)
    {
      $numStd = $rs["num"];
    }

    $query2 = "SELECT COUNT(*) num FROM teacher";
    $res2 = getArray($query2);
    foreach($res2 as $rs2)
    {
      $numTea = $rs2["num"];
    }

    $query3 = "SELECT COUNT(*) num from course";
    $res3 = getArray($query3);
    foreach($res3 as $rs3)
    {
      $numCou = $rs3["num"];
    }

?>


           <!--/////////---Main--/////////--->
           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            

           


            <h3>Hello <?php echo $superAdmin?></h3>

            <!--
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>

            -->


            <div style="height: 50px; width:250px; background-color:gray;color:honeydew ;margin-left:20px;">

             <h3> &nbsp;Total student:  <?php echo $numStd;?> </h3> 

            </div>

            <div style="height: 50px; width:250px; background-color:gray;color:honeydew ;margin-left:20px; margin-top:5%;">

             <h3> &nbsp;Total Teacher:  <?php echo $numTea;?> </h3> 

            </div>

            <div style="height: 50px; width:250px; background-color:gray;color:honeydew ;margin-left:20px; margin-top:5%;">

             <h3> &nbsp;Total Course:  <?php echo $numCou;?> </h3> 

            </div>

            

          </main> <!--##### End of Main #######----->


<?php

    require 'adminfooter.php';

?>
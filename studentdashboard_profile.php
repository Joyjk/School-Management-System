<?php
    require 'studentdashboard_headNav.php';

    require 'models/db_connect.php';

    $superStd = $_COOKIE["studentID"];

    $mysql = "SELECT s_id,Name,Gender,Father_Name,Mother_Name,email,f_phone,m_phone,country,birth_id FROM student WHERE s_id = '$superStd'";
    $value = getArray($mysql);

    foreach($value as $val)
    {

    
?>

<main > 

<span class="d-block p-2 bg-danger text-white" style="text-align: center;"> Student Profile</span>
<!----######################-->
<br>
<div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left: 30%; margin-right:30%">

                <!----Write code from here-->

    <table class="table text-center">
        <thead>
          <tr>
            
            <th scope="col" colspan="2">Details</th>
          </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>ID:</td>
                <td><?php echo $val["s_id"];?></td>
                
             </tr>  
          <tr>
            <td>Name:</td>
            <td><?php echo $val["Name"];?></td>
            
          </tr>
          <tr>
            <td>Gender: </td>
            <td> <?php echo $val["Gender"];?></td>
            
          </tr>
          <tr>
            
          <td>Father Name:</td>
            <td> <?php echo $val["Father_Name"];?></td>
            
          </tr>
          <tr>
            <td>Mother Name: </td>
            <td> <?php echo $val["Mother_Name"];?></td>
            
          </tr>

          <tr>

            <td>Email:</td>
            <td> <?php echo $val["email"];?></td>
            
          </tr>
          <tr>
            
            <td>Father Phone: </td>
            <td><?php echo $val["f_phone"];?></td>
            
          </tr>
          <tr>
            <td>Mother Phone:</td>
            <td> <?php echo $val["m_phone"];?></td>
            
          </tr>
          <tr>
            
            <td>Country:</td>
            <td> <?php echo $val["country"];?></td>
            
          </tr>
          <tr>
            
            <td>Birth certificate Number:</td>
            <td> <?php echo $val["birth_id"];?></td>
            
          </tr>
    <?php }?>



        </tbody>
      </table>




</div>



</main>


<?php
    require 'studentdashboard_footer.php';
?>
<?php
    
require 'studentdashboard_headNav.php';
include 'models/db_connect.php';
    
    $name = $_REQUEST["name"];
    $id = $_REQUEST["id"];
    $tt_id = $_REQUEST["tt_id"];
   // $id2 = $_REQUEST["cid"];
    

    $qus = "SELECT Name, email FROM teacher WHERE t_id = '$tt_id'";
    $ans = getArray($qus);






?>


<main >

        <span class="d-block p-2 bg-dark text-white" style="text-align: center;"> Courses Details</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:20%; margin-right:20%;">

        <div style="border:1px solid black ; height:100px; width:400px; border-radius: 30px;" > 

        <span style="margin-left: 34%; margin-bottom:40px;font-weight: 900; ">Teacher Details</span>
        <?php 
            foreach($ans as $a)
            {

            
        
        ?>
        <br>
        <span style="margin-left: 10%; padding-top:0px;font-weight: 600; ">Name: </span>
        <span style="font-weight: 600;"><?php echo $a["Name"]?></span>
        <br>
        <span style="margin-left: 10%; padding-top:0px;font-weight: 600; ">Email: </span>
        <span style="font-weight: 600;"><?php echo $a["email"];?></span>

            <?php }?>

        <br>
        <span style="margin-left: 10%; padding-top:0px;font-weight: 600; ">Course Name: </span>
        <span style="font-weight: 600;"><?php echo $name;?></span>

        </div>
            


        <div style="border:1px solid black ; height:150px; width:300px; border-radius: 30px; margin-left:25%; margin-top:10% "> 


        <a class="btn btn-primary btn-lg" href="studentdashboard_notes_down.php?id=<?php echo $id; ?>" role="button" style="margin-left: 30%; margin-top:5%">Notes</a>
        <br>
        <br>
        <a class="btn btn-secondary btn-lg" href="studentdashboard_notice.php?id=<?php echo $id;?>" role="button" style="margin-left: 30%;">Notice</a>

        




        </div>
       
    





                       

    <button style="margin-left:80%;" onclick="myback1()">Go back</button>
                        



        </div>



    </main>






<script>
    function myback1()
    {
        window.location.href = "studentdashboard.php";
    }


</script>

















<?php
    require 'studentdashboard_footer.php';
?>

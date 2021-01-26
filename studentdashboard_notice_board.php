<?php
    require 'studentdashboard_headNav.php';
    include 'models/db_connect.php';


    


  $n_id = $_REQUEST["id"];
  $c_id = $_REQUEST["c_id"];

  $query2 = "SELECT about, details from notice WHERE  notice_id = '$n_id'";

  $myArrr = getArray($query2);
    foreach($myArrr as $myArr)
    {

?>




    <main >

        <span class="d-block p-2 bg-danger text-white" style="text-align: center;"> Notice</span>
        <!----######################-->
        <br>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:20%; margin-right:20%;">


            
            <h3>About</h3>
            <hr>
            <h4><?php echo $myArr["about"];?></h4>
            <h4> C_ID: <?php echo $c_id;?></h4>

            <br>
            <br>

            <h3>Details</h3>
            <?php echo $myArr["details"];?>




    <?php }?>

                       

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
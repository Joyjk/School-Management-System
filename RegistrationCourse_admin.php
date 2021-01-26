<?php


require 'adminHeadNav.php';
//require 'models/db_connect.php';
require 'Control/courseidajax_ctlr.php';


$sql = "SELECT t_id,Name from teacher";

$result = getArray($sql);


if(isset($_POST["regcourse"]))
{
    $id = $_POST["cid"];
    $name = $_POST["name"];
    $t_id = $_POST["tid"];


    $query1 = "INSERT INTO course (c_id,Name,t_id) VALUES ('$id','$name','$t_id')";

    execute($query1);
}







?>




 <!---################-Main  #########################---->

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
             
             <h3>Hello</h3>
 
             
             <!---DJFHSDJFHSDKJ-->
 
 
             <div class="card bg-light fl-right">
                 <article class="card-body mx-auto" style="max-width: 400px;">
                     <h4 class="card-title mt-3 text-center">Course Registration</h4>
                    
             <form method="POST" onsubmit="return validateCourse()"> 
 
                 <div class="form-group input-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                      </div>
                     <input name="cid" class="form-control" onfocusout = "uniqueCID()" id="cid" placeholder="Unique ID" type="text">
                     
                 </div>
                 <span style="float: right; margin-bottom:2%" id="errsid"></span>
                 
                 <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="name" class="form-control" id="name" placeholder="Course Name" type="text">
                </div> <!-- form-group// -->

                
                 <div class="form-group input-group">
                 <div class="input-group-prepend">
                         <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                     <select class="custom-select" name="tid" id="tid">
                         <option value="" hidden>Choose</option>
                        <?php 
                            foreach($result as $res)
                            {
                                echo "<option value='".$res["t_id"]."'>".$res["Name"]."</option>";
                            }
                        ?>

                         
                         
                         
                     </select>
                     
                 </div>

                                                    
                 <div class="form-group">
                     <button type="submit" name="regcourse" class="btn btn-primary btn-block"> Create Course </button>
                 </div> <!-- form-group// -->      
                 
             </form>
            
         
         
         
         
         </article>
         </div> <!-- card.// -->
         
     </main>  <!--################# Main End #############---->
 

   <script src="jsMy/courseRegistration_validation.js"></script>                            
















<?php
        require 'adminfooter.php';
?>
<?php
  //require 'models/db_connect.php';

  require 'Control/logincontroller.php';

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---Bootstrap css-->
    <!--<link href="Content/bootstrap.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- Custom styles for this template for side bar-->
    <link href="CSS/simple-sidebar.css" rel="stylesheet">

    <!---My css-->
    <link href="CSS/global-css.css" rel="stylesheet" type="text/css"> 
    <title>Login</title>
</head>
<body>
    
   <section class="container-fluid">
       <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">

                <form class="form-container" method="POST" onsubmit="return validateLogin()">

                    <div class="form-group">
                        <h3 style="text-align: center;">Login </h3>
                      <label for="userid">User ID</label>
                      <input type="text" name="userID" class="form-control" id="userID" aria-describedby="emailHelp">
                      <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="pass" class="form-control" id="pass">
                    </div>
                    <div class="form-group form-check">
                    <!-- <a href="#">forget password</a> <br>-->
                     
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="login" id="login">Submit</button>
                  </form>



            </section>
       </section>

   </section>


















    <!----Bootstrap JS
    <script src="../Scripts/jquery-3.5.1.js"></script>
    <script src="../Scripts/popper.js"></script>
    <script src="../Scripts/bootstrap.js"></script>
    <script src="jsMy/loginDemo.js"></script>
    -->
    <!---Bootstrap JS CDN-->
    <script src="jsMy/loginValidation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--<script src="jsMy/loginDemo.js"></script>-->
    


</html>
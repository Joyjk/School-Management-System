<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/Dashdemo.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
    <?php
      session_start();
      if(!isset($_SESSION["adminID"]))
      {
        echo '<script>window.location.href = "login.php"</script>';
      }
    
    
    ?>


    <nav class="navbar navbar-light bg-primary fixed-top flex-md-nowrap p-0 shadow" style="background-color:gray;" >
        <!-- Navbar content -->
        <a href="admindashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">Dashboard Admin </a>

        <!---search box-->
        
            <input class="form-control form-control-primary w-100" type="search" id="myInput" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="adminResetPass.php">Change Password</a>
              <a class="dropdown-item" href="adminLogOut.php">Log out</a>
              <!--<a class="dropdown-item" href="#">Something else here</a>-->
            </div>
          </li>
        </ul>
      </nav>

      
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-2 bg-light d-none d-md-block sidebar">

            <div class="left-sidebar">

              <!---side bar-->
              <ul class="nav flex-column nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="admindashboard.php">Overview</a>
                </li>
              
              
                <!--  
                <li class="nav-item">
                  <a class="nav-link" href="DashboardAdminTeacher.html">Teacher</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="DashboardAdminStudent.html" >Student</a>

                </li>
                -->

                <li class="nav-item">

                  <div class="dropdown nav-link">
                    <a class="btn dropdown-toggle" href="#" role="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Teachers
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="RegistrationTeacher_admin.php">Registration</a>
                      
                      <a class="dropdown-item" href="adminTeacherDetails.php" id="admin-teacher-details">Details</a>
                    </div>
                  </div>

                </li>




                <li class="nav-item">

                  <div class="dropdown nav-link">
                    <a class="btn dropdown-toggle" href="#" role="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Students
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="RegistrationStudent_admin.php">Registration</a>
                      
                      <a class="dropdown-item" href="adminStudentDetails.php">Details</a>
                      <a class="dropdown-item" href="adminStudentCourse_Assign.php">Course</a>
                    </div>
                  </div>

                </li>




                <li class="nav-item">

                  <div class="dropdown nav-link">
                    <a class="btn dropdown-toggle" href="#" role="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Course
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="RegistrationCourse_admin.php">Registration</a>
                      
                      <a class="dropdown-item" href="adminCourseDetails.php">Details</a>
                      
                    </div>
                  </div>

                </li>







              </ul>



            </div>

           

          </div>


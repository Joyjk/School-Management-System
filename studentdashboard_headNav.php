<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dashboard Student</title>
  </head>
  <body>
    <?php 
      if(!isset($_COOKIE["studentID"]))
      {
        echo '<script>window.location.href = "login.php"</script>';
      }
    
      ///$stdid = $_COOKIE["studentID"];

      
      


    ?>


    <div >
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="pic/penpaper.svg" width="50" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                
              </a>
            <a class="navbar-brand" href="studentdashboard.php">ABC School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="studentdashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Academic
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="studentdashboard_course.php">Courses</a>
                      <!--<a class="dropdown-item" href="#">Registration</a>-->
                      <!--<a class="dropdown-item" href="studentdashboard_notice.php">Notice</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Drop application</a>-->
                    </div>
                  </li>
                <li class="nav-item">
                    <!--<a class="nav-link" href="studentdashboard_notes_down.php">Notes</a>-->
                </li>
                
              </ul>
            <div class="dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome Student
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="studentdashboard_profile.php">Profile </a>
                <a class="dropdown-item" href="studentResetPass.php">Change Password </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="studentLogOut.php">Log out</a>
              </div>
            </div>

            </div>
          </nav>



          <!----#####################----->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-hea">
                  <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Current Password:</label>
                      <input type="password" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">New Password:</label>
                        <input type="password" class="form-control" id="recipient-name">
                      </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Confirm Password:</label>
                        <input type="password" class="form-control" id="recipient-name">
                      </div>
                    
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Change</button>
                </div>
              </div>
            </div>
          </div>





</div>

<?php
    require 'models/db_connect.php';
    
    if(isset($_POST["login"]))
    {
       $userID = $_POST["userID"];
       $pass = $_POST["pass"];
  
  
       if(preg_match("/_/",$userID))
       {
         /////teacher
         if(authTeacher($userID,$pass))
         {
            setcookie("teacherID",$userID,time()+180);
            header('Location: teacherdashboard.php');
         }
         else
         {
           echo "Error User ID or Password";
         }
  
       }
       else if(preg_match("/-/",$userID))
       {
         /////student
          if(authStudent($userID,$pass))
          {
            setcookie("studentID",$userID,time()+180);
            header('Location: studentdashboard.php');
          }
          else
          {
            echo "Error User ID or Password";
          }
         
       }
       else if(preg_match("/%/",$userID))
       {
         ////admin
           if(authAdmin($userID,$pass))
           {
             session_start();
            //setcookie("adminID",$userID,time()+180);
            $_SESSION["adminID"] = $userID;
            header('Location: admindashboard.php');
           }
           else
           {
              echo "Error User ID or Password";
           }
       }
    }
    function authTeacher($id,$pass)
    {
      $sql = "SELECT Name from teacher WHERE t_id = '$id' and password = '$pass'";
      $user = getArray($sql);
      return $user;
    }
  
    function authStudent($id,$pass)
    {
        $sql1 = "SELECT Name from student WHERE s_id = '$id' and password = '$pass'";
        $user1 = getArray($sql1);
        return $user1;
    }
    function authAdmin($id,$pass)
    {
        $sql2 = "SELECT Name from admin WHERE a_id = '$id' and password = '$pass'";
        $user2 = getArray($sql2);
        return $user2;
    }









?>
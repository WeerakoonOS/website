<?php
   include('dblog.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];


// getting name of the logging user
   $sql = "SELECT firstname from ud where username = '$user_check' " ;
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
       = $row['firstname'];



   $sq = "SELECT email from users where username = '$user_check' " ;
   $ses_sql = mysqli_query($conn,"$qq");

   //$ses_sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
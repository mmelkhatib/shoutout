<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'database.php';

/*
 * 
 * Check if form was submitted
 */


if(isset($_POST['submit'])){
 //check for html validation
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

 
 // Set time zone
   date_default_timezone_set('America/New_York');
   $time = date('H:i:s a', time());
    
    //validate 
   if(!isset($user) || $user == '' || !isset($message) || $message == '') {
  $error = "Please fill in your name and a message";
  header("Location: index.php?error=". urlencode($error));
  exit();
       
   }
       else{
           $query = "INSERT INTO shouts(user, message, time)
                   VALUES ('$user', '$message', '$time')";
           
       }
       if(!mysqli_query($con, $query)){
          die('Error :' .mysqli_error($con));     
       } else {
           header("location: index.php");
           exit();
       }
}
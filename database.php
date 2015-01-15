<?php

/* 
 *Connect to Database
 */


$con = mysqli_connect("local.shoutout.com","vlad","wibble","vladdb");

if(mysqli_connect_errno()){
echo 'failed to connect to Database: '.mysqli_connect_error();        
}
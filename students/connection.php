<?php
   $db=mysqli_connect("localhost","root","","library") ;// server name, username(root),passwor ,ddatabase name .
 
   if(!$db){
    die("connection failed:" . mysqli_connect_error());
   }
  echo" Connection sucessfully.";
 ?>
                                       
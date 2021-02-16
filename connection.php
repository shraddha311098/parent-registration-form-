<?php
$conn= new mysqli('localhost','root','','ceddb');
   if($conn->connect_error){
       die("connection failed".$conn->connect_error);
   }
   echo "connection established";
   
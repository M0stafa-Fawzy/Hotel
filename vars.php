<?php

$host="localhost";
$user="root";
$password="";
$database="signup";

if(mysql_connect("localhost", "root", "")){
   if(mysql_select_db("signup")){
       echo '';
   }
}



?>
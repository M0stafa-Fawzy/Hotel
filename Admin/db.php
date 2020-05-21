
<?php

$host="localhost";
$user="root";
$password="";
$database="demo";

$con = mysqli_connect("localhost","root","","demo") or die(mysql_error());
if(mysql_connect("localhost", "root", "")){
   if(mysql_select_db("demo")){
       echo '';
   }
}


?>
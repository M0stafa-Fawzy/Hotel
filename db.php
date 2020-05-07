<?php
$con = mysql_connect("localhost","root","","demo") or die(mysql_error());
if(mysql_connect("localhost", "root", "")){
   if(mysql_select_db("demo")){
       echo '';
   }
}

?>
<?php

function Connect()
{
   $dbhost = "mysql";
   //$dbhost = "ict01.cjjnqqu01ipm.us-east-1.rds.amazonaws.com";
   $dbuser = "webcast";
   $dbpass = "ICTdclm2018";
   $dbname = "dclm.webcast";

   // Create connection
   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 


?>
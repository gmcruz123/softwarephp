<?php

$username = "root";
$server = "localhost";
$pass = "";
$dbname = "lasierra";


$db= mysqli_connect($server,$username,$pass,$dbname)
     or die('Error connecting to MySQL server.');


/*
$result = mysql_query("select * from users")

*/?>
<?php 
include('../firebase/connectiondb.php');

$token = $_POST["token"];
$id = $_POST["id"];

$sql = "UPDATE docente SET TOKEN='$token' WHERE ID_DOCENTE='$id'";

mysqli_query($db, $sql) or die('Error querying database.');



?>
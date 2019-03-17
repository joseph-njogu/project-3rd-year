<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jojale3";

$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Successfuly connected!!!";
echo "<br><br><br>";

?>





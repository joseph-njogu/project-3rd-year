<?php
include 'connect.php';
$Fname = $_POST['firstName'];
$Lname=$_POST['lastName'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$phone_no=$_POST['phonenumber'];
$add=$_POST['address'];
$usertype= 'laborer';

$sql1="INSERT INTO `login` (`log_id`,`email`,`password`,`usertype`)VALUES
(NULL,'$email','$pwd','$usertype')";

if($conn->query($sql1) === TRUE) {
   
    echo "Dataentered successfully";
} 
else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$sql="INSERT INTO `laborer`(`laborer_id`, `firstname`, `lastname`, `phone_no`, `addres`, `log_id`)VALUES(NULL,'$Fname','$Lname','$phone_no','$add',(SELECT log_id FROM login WHERE email='$email'))";

if($conn->query($sql) === TRUE) {
    echo "Dataentered successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>

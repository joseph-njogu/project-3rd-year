<?php
session_start();
?>

<?php
include_once('connect.php');

$email=$_POST['email'];
$passd=$_POST['password'];
$sql="select * from login where email='$email'";
$result=mysqli_query($conn, $sql);

if((mysqli_num_rows($result>0)) && ( password_verify( $passd, $result['password'] ) ) ){
    if($result['usertype']=="contractor")
    {    
        $_SESSION["id"] = $result['log_id'];
        $_SESSION["type"] = $result['usertype'];
        $session=$_SESSION["id"];
        $session2=$_SESSION["type"];
        echo "string";
        header('location:contractorsignup.php');
    }
 elseif($result['usertype']=="laborer")
 {     
     $_SESSION["elogid"] = $result['log_id'];
     $_SESSION["type"] = $result['usertype'];
     $_SESSION["status"]=$result['status'];
     header('location:laborer/contractorsignup.php?msg=success');
 }
}
else
{
header('location:login.php?msg=failed');
}
?>
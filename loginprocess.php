<?php
session_start();
?>

<? php
include 'contractor/connect.php';
if(isset($_SESSION["log_id"])){
   
}
$email=$_POST["email"];
$Pass=$_POST["password"];

$sq="SELECT * FROM login WHERE email= '$email' AND password='$Pass'";
     

$result = $conn->query($sq);
if ($result->num_rows > 0) {
      if($row = $result->fetch_assoc()) {
        if($row['usertype']=="laborer") {
        session_unset($_SESSION["log_id"])  ;      
        $_SESSION["log_id"]=$row['log_id'];    
        header('location:laborer/lprofile.php');        
        $sess=$_SESSION["log_id"];        
       } 
        elseif($row['usertype']=="contractor") {
        session_unset($_SESSION["log_id"])  ; 
        $_SESSION["log_id"]=$row['log_id'];
         $sess=$_SESSION["log_id"];
         header('location:contractor/contractorprofile.php');     

        echo $sess;
       }
      }       
     } 
     else {
     	echo "Error: " . $sq . "<br>" . $conn->error;
     	echo "login failed";
}
     

  


?>
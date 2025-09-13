<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:../../Dashboard/login.php");
    exit();
}
header("Cache-Control:no-store,no-cache,must-revalidate,max-age=0");
header("Cache-Control:post-check=0,pre-check=0",false);
header("Pragma:no-cache");
include "../../Dashboard/config.php";
$result=$conn->query("SELECT * FROM emergency_access WHERE Status='Active'");
if($result->num_rows>0){
    echo "<script>alert('⚠️Emergency Alert!Check The Notification Immediately');</script> ";   
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../CSS/Admin_Dashboard.css">
    </head>
    <body> 
    <div class="navbar">
     <a href="User_Portal.php">View Portal</a>  
     <a href="Add_Seminar.php"> Organize Seminar</a> 
     <a href="Receive_Notification.php">Emergency Notification</a>
     <a href="../../Dashboard/logout.php">Log out</a>
    </div>
    <div  class="message" style="text-align:center">
    <h2>Welcome, <?php echo $_SESSION["user"]; ?> 🎉</h2>
    </div>
    </body>
</html>    
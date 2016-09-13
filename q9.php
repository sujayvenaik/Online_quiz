<?php
include 'config.php';
session_start();
$a9	= $_POST['txtarea9'];
$sql = mysql_query("UPDATE `applicants` SET `q9` = '$a9' WHERE email='".$_SESSION['email']."'");

	if($sql){
        echo "<script>alert('Your answer is recorded ');window.location ='main.php';</script>";    }
	else{
echo "<script>alert('Error occured. Please try again.');window.location ='1.php';</script>";
    }
     
//Resume Upload code Ends
?>
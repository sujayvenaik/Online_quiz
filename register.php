<?php
include 'config.php';

$name	= $_POST['name'];
$email 	= $_POST['email'];
$phone 	= $_POST['phone'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$pass = $_POST['password'];

$insert_registration=mysql_query("Insert into applicants values('$name','$email','$phone','$branch','$year','$pass',0,'','','','','','','','','','')");
mysql_query("INSERT INTO flag values('$email','','','','','','','','','','')");
	if($insert_registration){
        echo "<script>alert('You are now registered. Wishing you best of luck for the event. ');window.location ='login.html';</script>";    }
	else{
echo "<script>alert('Error occured. Please try again. Duplicate Entry for Email ID.');window.location ='register.html';</script>";
    }
     
//Resume Upload code Ends
?>
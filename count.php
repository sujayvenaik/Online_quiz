<?php
session_start();
$count=0;
// $lvl=$_POST['level'];
if(isset($_POST['submit'])){
if($count > 4 )
		echo "You cannot select more than 5 options";
	else
	$count++;
}
?>
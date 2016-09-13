<?php
 require_once 'functions/function.php';
 getpart('header');
 getpart('banner');
 if(isset($_SESSION['name']))
 getpart('login');
 else
  getpart('dashboard1');?>







 <?php
 getpart('footer');
?>

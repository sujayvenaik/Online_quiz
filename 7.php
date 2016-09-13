<?php
include 'config.php';
session_start();
$q=mysql_query("SELECT q7 FROM flag WHERE email='".$_SESSION['email']."'");
$val=mysql_fetch_array($q);
//print_r ($val[0]);
$que12=mysql_query("SELECT count FROM applicants WHERE email='".$_SESSION['email']."'");
if($que12){
  //echo "HI";
}
//echo $_SESSION['email'];
$cou12=mysql_num_rows($que12);
$value12=mysql_fetch_array($que12);

//print_r($value12[0]) ;
if($value12[0]<5){
if($val[0]==0)
  {$num=$value12[0]+1;
$sql = mysql_query("UPDATE `applicants` SET `count` = $num WHERE email='".$_SESSION['email']."'");
$up =mysql_query("UPDATE `flag` SET `q7` = '1' WHERE `flag`.`Email` = '".$_SESSION['email']."'");}
}
$q=mysql_query("SELECT q7 FROM flag WHERE email='".$_SESSION['email']."'");
$que12=mysql_query("SELECT count FROM applicants WHERE email='".$_SESSION['email']."'");
if($que12){
  //echo "HI";
}
//echo $_SESSION['email'];
$cou12=mysql_num_rows($que12);
$value12=mysql_fetch_array($que12);
$val=mysql_fetch_array($q);

$answer=mysql_query("SELECT q7 FROM `applicants` WHERE email='".$_SESSION['email']."'");
$ans1=mysql_num_rows($answer);
$ans2=mysql_fetch_array($answer);


if(isset($_SESSION['email']) && $value12[0]<=5 && $val[0]==1)
{?>

<!DOCTYPE html>
<html>
<head>
<title>Know Your Teacher || UPES-CSI</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script src="js/includes.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span>Know Your Master</span></a>
			</div>
      <div class="header-right">
      <a class="account" href="main.php">Back</a>
			<a class="account" href="logout.php">Logout</a>
      </div>
	</div>
</div>
</div>
<div class="categories">
<div class="container">
<h3 style=" margin-left: 20px;">Welcome <?php echo $_SESSION['name']; ?></h3><br>
<h4>Question 7: Write a C-program to find the smallest of three integers without using any of the comparision operators.</h4>
<form class="" action="q7.php" method="post">
  <div class="form-group">
    <label for="txtarea1" class="col-sm-2 control-label"><h3>Answer</h3></label>
    <div class="col-sm-8"><textarea name="txtarea7" id="txtarea7" cols="50" rows="1000000" class="form-control1" style="height:300px"><?php echo $ans2[0]; ?></textarea></div>
  </div>
  <input type="submit" name="" value="Submit Code">
</form>

</div>
</div>


		<!--footer section start-->
			<footer class="diff">
			   <p class="text-center">&copy 2016 CSI. All Rights Reserved  </p>
			</footer>
        <!--footer section end-->
	</section>
</body>
</html>
<?php
}
else
echo "<script>alert('You have already made 5 choices. You cannot choose more. Attempt the ones choosen. Thankyou. ');window.location ='main.php';</script>"; 


?>

<?php
include 'config.php';
session_start();
if(isset($_SESSION['email']))
{
  $q=mysql_query("SELECT * FROM `applicants` WHERE `Email` = '".$_SESSION['email']."'");
  if($q){
$row=mysql_fetch_array($q);}
else
echo "Error";
  ?>

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
			<a class="account" href="logout.php">Logout</a>
      </div>
	</div>
</div>
</div>
<br><br><br>
<h2 style=" margin-left: 50px;">Welcome <?php echo $_SESSION['name']; ?></h2><br>
<div class="categories">
<div class="container">
  <div class="col-md-3 biseller-column">
    <a href="1.php">
      <img src="images/ar.jpg"/>
      <span class="price">Question 1</span>
    </a>
    <?php if($row['q1']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>


  <div class="col-md-3 biseller-column">
    <a href="2.php">
      <img src="images/Alind Nasra.jpg"/>
      <span class="price">Question 2</span>
    </a>
    <?php if($row['q2']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>


  <div class="col-md-3 biseller-column">
    <a href="3.php">
      <img src="images/Bhagwant Singh.jpg"/>
      <span class="price">Question 3</span>
    </a>
    <?php if($row['q3']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>


  <div class="col-md-3 biseller-column">
    <a href="4.php">
      <img src="images/rs.jpg"/>
      <span class="price">Question 4</span>
    </a>
    <?php if($row['q4']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>
</div>
</div>


<div class="categories">
  <div class="container">
    <div class="col-md-3 biseller-column">
      <a href="5.php">
        <img src="images/ks.jpg"/>
        <span class="price">Question 5</span>
      </a>
      <?php if($row['q5']!=NULL) {?>
      <div class="ad-info">
        <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
      </div><?php } ?>
    </div>

  <div class="col-md-3 biseller-column">
    <a href="6.php">
      <img src="images/rt.jpg"/>
      <span class="price">Question 6</span>
    </a>
    <?php if($row['q6']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>

  <div class="col-md-3 biseller-column">
    <a href="7.php">
      <img src="images/gc.jpg"/>
      <span class="price">Question 7</span>
    </a>
    <?php if($row['q7']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>



  <div class="col-md-3 biseller-column">
    <a href="8.php">
      <img src="images/rcy.jpg"/>
      <span class="price">Question 8</span>
    </a>
    <?php if($row['q8']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>
</div>

</div>

<div class="categories">
<div class="container">
  <div class="col-md-3 focus-grid">

  </div>
  <div class="col-md-3 biseller-column">
    <a href="9.php">
      <img src="images/bs.jpg"/>
      <span class="price">Question 9</span>
    </a>
    <?php if($row['q9']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>

  <div class="col-md-3 biseller-column <?php if($row['q10']!=NULL)?>dimmed<?php?>">
    <a href="10.php">
      <img src="images/vr.jpg"/>
      <span class="price">Question 10</span>
    </a>

    <?php if($row['q10']!=NULL) {?>
    <div class="ad-info">
      <h5><span style="color: #fff;" class="label label-success"> Solution Submitted!</span></h5>
    </div><?php } ?>
  </div>
  <div class="col-md-3 focus-grid">

  </div>

  </div>

</div>


		<!--footer section start-->
			<footer class="diff">
			   <p class="text-center" style=" margin:5px; padding:0px;">&copy 2016 CSI. All Rights Reserved  </p>
			</footer>
        <!--footer section end-->
	</section>
</body>
</html>
<?php
}
else
{header('location:index.php');}
?>

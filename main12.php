<?php
session_start();
if(isset($_SESSION['email']))
{?>

<!DOCTYPE html>
<html>
<head>
<title>Main</title>
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
  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/ar.jpg" alt="" />

              <a href="1.php"><h2><span class="label label-default">Question 1</span></h2></a>

      </div>

  </div>
  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/Alind Nasra.jpg" alt="" />

              <a href="2.php"><h2><span class="label label-default">Question 2</span></h2></a>

      </div>

  </div>

  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/Bhagwant Singh.jpg" alt="" />

              <a href="3.php"><h2><span class="label label-default">Question 3</span></h2></a>

      </div>

  </div>

  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/rs.jpg" alt="" />

              <a href="4.php"><h2><span class="label label-default">Question 4</span></h2></a>

      </div>

  </div>

</div>
</div>
<div class="categories">
  <div class="container">
  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/ks.jpg" alt="" />

              <a href="5.php"><h2><span class="label label-default">Question 5</span></h2></a>

      </div>

  </div>

  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/rt.jpg" alt="" />

              <a href="6.php"><h2><span class="label label-default">Question 6</span></h2></a>

      </div>

  </div>
  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/gc.jpg" alt="" />

              <a href="7.php"><h2><span class="label label-default">Question 7</span></h2></a>

      </div>

  </div>
  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/rcy.jpg" alt="" />

              <a href="8.php"><h2><span class="label label-default">Question 8</span></h2></a>

      </div>

  </div>
</div>
  <div class="clearfix"></div>
</div>

<div class="categories">
<div class="container">
  <div class="col-md-3 focus-grid">

  </div>
  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/bs.jpg" alt="" />

              <a href="9.php"><h2><span class="label label-default">Question 9</span></h2></a>

      </div>

  </div>
  <div class="col-md-3 focus-grid">

      <div class="focus-border center-block">

          <img src="images/vr.jpg" alt="" />

              <a href="10.php"><h2><span class="label label-default">Question 10</span></h2></a>

      </div>

  </div>
  <div class="col-md-3 focus-grid">

  </div>

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
{header('location:index.php');}
?>

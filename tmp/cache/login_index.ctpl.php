<!DOCTYPE HTML>
<html>
<head>
<title>Administration croissant rouge</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?php echo static::$conf['base_url']; ?>/skin/admin/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo static::$conf['base_url']; ?>/skin/admin/public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="<?php echo static::$conf['base_url']; ?>/skin/admin/public/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Connexion</h1>
			</div>
			<div class="login-block">
				<form method="post" action="login">
					<h2 style="color:#FF0C00; text-size:20px; text-align: center">
						<?php $msg = Flash::display(); ?><?php echo $msg; ?>
					</h2>
					<input type="text" id="login" name="login" placeholder="Login" required="">
					<input type="password" id="mdp" name="mdp" class="lock" placeholder="Mot de passe" required="">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Se connecter">
				</form>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Croissant rouge. All Rights Reserved</p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/jquery.nicescroll.js"></script>
		<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						

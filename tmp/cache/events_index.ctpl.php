<!DOCTYPE html>
<html>
<head>
<title>My Charity A Charity  category Flat bootstrap Responsive  Website Template| Event :: w3layouts</title>
<link href="<?php echo static::$conf['base_url']; ?>/skin/default/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo static::$conf['base_url']; ?>/skin/default/public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!--js-->
<script src="<?php echo static::$conf['base_url']; ?>/skin/default/public/js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="My Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo static::$conf['base_url']; ?>/skin/default/public/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo static::$conf['base_url']; ?>/skin/default/public/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="mothergrid">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="<?php echo static::$conf['base_url']; ?>index.html"> <img src="<?php echo static::$conf['base_url']; ?>/skin/default/public/images/logo.png" alt=""/> </a>
			</div>
			<span class="menu"> <img src="<?php echo static::$conf['base_url']; ?>/skin/default/public/images/icon.png" alt=""/></span>
			<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li><a href="<?php echo static::$conf['base_url']; ?>home/index">Accueil</a></li>
					<li><a href="<?php echo static::$conf['base_url']; ?>about/index">A propos</a></li>
					<li><a class="active" href="<?php echo static::$conf['base_url']; ?>events/index">Evénements</a></li>
					<li><a href="<?php echo static::$conf['base_url']; ?>contact/index">Contact</a></li>
				</ul>
				 <script>
			                                                      $( "span.menu").click(function() {
			                                                                                        $(  "ul.res" ).slideToggle("slow", function() {
			                                                                                         // Animation complete.
			                                                                                         });
			                                                                                         });
		                                                     </script>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--events start here-->
<div class="events">
	<div class="container">
		<div class="event-main">
			<div class="event-head">
				<h3>Nos événements</h3>
			</div>
			<div class="event-top">
			
			
			<div class="clearfix"> </div>
			</div>
			<div class="event-top">
			
			
			<div class="clearfix"> </div>
			</div>
			<div class="event-top">
			
			
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--events end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<h3>Suivre</h3>
				<ul>
					<li><a href="<?php echo static::$conf['base_url']; ?>#"><span class="a"> </span></a></li>
					<li><a href="<?php echo static::$conf['base_url']; ?>#"><span class="b"> </span></a></li>
					<li><a href="<?php echo static::$conf['base_url']; ?>#"><span class="c"> </span></a></li>
				</ul>
				</div>
				
				<div class="col-md-4 footer-right">
					<h3>Contact us</h3>
					<p>Addresse : </p>
					<p>tél : </p>
				</div>
			<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>2014 &copy Template by <a href="http://w3layouts.com/"> W3layouts </a> </p>
			</div>
		<div class="clearfix"> </div>
		<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="<?php echo static::$conf['base_url']; ?>#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
</div>
<!--/footer end here-->
</body>
</html>
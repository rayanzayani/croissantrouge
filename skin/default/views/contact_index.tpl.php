<!DOCTYPE html>
<html>
<head>
<title>My Charity A Charity  category Flat bootstrap Responsive  Website Template| Contact :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!--js-->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="My Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
	<script type="text/javascript">


		function verifLettre ()
		{
			if (event.keyCode < 97  || event.keyCode > 122)
				event.returnValue = false;
		}


		function verifPhrase ()
		{
			if ((event.keyCode < 97 && event.keyCode !=32) || event.keyCode > 122)
				event.returnValue = false;
		}

		function verifFloat ()
		{

			if((event.keyCode < 48 && event.keyCode !=46) || event.keyCode > 57)
				event.returnValue = false;
		}

		function verifInt ()
		{

			if(event.keyCode < 48 || event.keyCode > 57)
				event.returnValue = false;
		}


		function verifPhonee ()
		{
			if(event.keyCode < 48 || event.keyCode > 57)
				event.returnValue = false;
		}

		function verifMot ()
		{
			if(event.keyCode == 32)
				event.returnValue = false;
		}

		function verifMail()

		{
			a = document.f.email.value;
			valide1 = false;
			for(var j=1;j<(a.length);j++){
				if(a.charAt(j)=='@'){
					if(j<(a.length-4)){
						for(var k=j;k<(a.length-2);k++){
							if(a.charAt(k)=='.') valide1=true;
						}
					}
				}
			}

			if(valide1==false)
			{
				var errorDiv1 = document.getElementById('error-message1');
				errorDiv1.innerHTML = 'Please enter your email address in the format someone@example.com.';
				return false;
			}
		}

		function validate()
		{
			if(verifMail() == false)
				return false;



			return true;
		}

	</script>
</head>
<body>
<!--header start here-->
<div class="mothergrid">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="home/index"> <img src="images/logo.png" alt=""/> </a>
			</div>
			<span class="menu"> <img src="images/icon.png" alt=""/></span>
			<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li><a href="home/index">Accueil</a></li>
					<li><a href="about/index">A propos</a></li>
					<li><a href="events/index">Evénements</a></li>
					<li><a href="vol/index">S'inscrire</a></li>
					<li><a class="active" href="contact/index">Contact</a></li>
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
<!--heder end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<h3></h3>
			
		</div>
	</div>
</div>
<div class="get">
	<div class="container">
		<div class="get-main">

			  <h3>Contact</h3>
			  <div class="col-md-6 get-left">
				<form method="post" action="">
					 <p>Nom et prénom</p>
					 <input type="text" placeholder="nom et prénom"  required="" minlength="10" onkeypress="verifPhrase()"/>
					 <p>Email</p>
					 <input type="text" placeholder="exemple@yahoo.fr" required="" onkeypress="verifMail()"/>
					 <p>Telephone</p>
					 <input type="text" placeholder="xx xxx xxx" required="" maxlength="8" minlength="8" onkeypress="verifInt()"/>
					 <input type="submit" value="Envoyez">
				
			  </div>
			  <div class="col-md-6 get-right">
			  	<h4>Message</h4>
				  <input type="text"  required="" style="width: 450px; height: 200px"/>
				</form>

		 	  </div>
		 	<div class="clearfix"> </div>	
		</div>
	</div>
</div>
<div class="map">
	<div class="container">
		 <iframe src="{$info->url}"  frameborder="0" style="border:0"></iframe>
	</div>
</div>
<!--get touch end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<h3>Suivre</h3>
				<ul>
					<li><a href="{$socials->facebook}"><span class="a"> </span></a></li>
					<li><a href="{$socials->twitter}"><span class="b"> </span></a></li>
					<li><a href="{$socials->google}"><span class="c"> </span></a></li>
				</ul>
				</div>
				
				<div class="col-md-4 footer-right">
					<h3>Contact us</h3>
					<p>Addresse : {$info->addresse}</p>
					<p>tél : {$info->tel}</p>
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
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
</div>
<!--/footer end here-->
</body>
</html>
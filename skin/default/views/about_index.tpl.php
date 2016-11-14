<!DOCTYPE html>
<html>
<head>
<title>A propos</title>
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
					<li><a class="active" href="about/index">A propos</a></li>
					<li><a href="events/index">Evénements</a></li>
					<li><a href="vol/index">S'inscrire</a></li>
					<li><a href="contact/index">Contact</a></li>
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
<!---about charity start here-->
<div class="about">
    <div class="container">
	     <div class="about-main">
	  	     <div class="about-top">
	  	     	 <h3>A propos croissant rouge</h3>
	  	     </div>
	  	    <div class="about-grid">
				<p>Le Mouvement international de la Croix-Rouge et du Croissant-Rouge est le plus grand réseau humanitaire du monde. Neutre et impartial, il assure protection et assistance à des communautés affectées par des catastrophes et des conflits.

				Le Mouvement rassemble près de 13 millions de volontaires, membres et employés dans 188 pays. Il est constitué de trois composantes principales :
				•	Le Comité international de la Croix-Rouge (CICR)
				•	La Fédération internationale des Sociétés de la Croix-Rouge et du Croissant-Rouge (FICR)
				•	Les Sociétés nationales de la Croix-Rouge et du Croissant-Rouge

				<p>En étroit partenariat, les différents membres du Mouvement aident les communautés vulnérables à devenir plus fortes et plus sûres grâce à des projets de développement et de programmes humanitaires très variés. Le Mouvement s'emploie aussi en coopération avec des gouvernements, des bailleurs de fonds et d'autres organismes d'assistance à aider des personnes vulnérables à travers le monde entier.</p>
				L’histoire du Mouvement a commencé sur le champ de bataille de Solferino le 24 juin 1859. Henry Dunant, un homme d’affaires genevois de 31 ans, voyageait pour rencontrer l’Empereur français Napoléon III, lequel combattait l’armée autrichienne.

				Bouleversé par un carnage dans lequel 40 000 soldats perdirent la vie ou, blessés, furent abandonnés à leur sort, Dunant décida d’improviser des secours avec les femmes des villages voisins. De retour à Genève quelques jours plus tard, il resta hanté par ce qu’il avait vu sur le champ de bataille. En 1862, il publia Un Souvenir de Solferino, ouvrage dans lequel il relatait ce qu’il avait vu et présentait deux propositions pour améliorer l’assistance aux victimes de la guerre :

				-	Créer, en temps de paix et dans chaque pays, des groupes de volontaires chargés de s'occuper des victimes en temps de guerre ;
				-	obtenir des pays qu’ils acceptent de protéger les secouristes volontaires et les blessés sur le champ de bataille.

				Le livre fut un immense succès et Dunant voyagea à travers l’Europe pour chercher des soutiens à ses propositions. Le 17 février 1863, avec le soutien de quatre citoyens genevois (un militaire, le Général Guillaume Henry Dufour ; un juriste, Gustave Maunier et deux médecins, Louis Appia et Théodore Maunoir), il fonda le Comité international de secours aux militaires blessés (CISMB), qui devint en 1875 le Comité International de la Croix-Rouge (CICR).</p>
				Ensemble, toutes les composantes du Mouvement international de la Croix-Rouge et du Croissant-Rouge sont guidées par sept Principes fondamentaux:

				HUMANITE, IMPARTIALITE, NEUTRALITE, INDEPENDANCE, VOLONTARIAT, UNITE ET UNIVERSALITE
			</div>
			<div class="clearfix"> </div>
		</div>
		
	</div>
</div>
<!--about us end here-->
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
				<p>2014 &copy Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
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
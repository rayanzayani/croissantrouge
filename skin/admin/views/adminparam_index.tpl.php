<!DOCTYPE HTML>
<html>
<head>
<title>Paramètres du compte</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>

<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
				<center><h1>Paramètres du compte</h1></center>
					<div class="header-left">
							<div class="logo-name">
								<a href="admin/index">
									<span class="prfil-img"><img src="images/logo.png"/></span>
								  </a> 								
							</div>
							<div class="clearfix"> 
							
							</div>
							
						 </div>
						 <div class="header-right">
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""></span> 
												<div class="user-name">
													<span>Admin</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="adminparam/index"><i class="fa fa-cog"></i>paramères</a> </li>
											<li> <a href="login/logout"><i class="fa fa-sign-out"></i>déconnexion</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<h3 class="inner-block">
<!-- le traitement des données --> 
		<center>
			<form method="post" action="update">
				<h3 style="color:#45C326; text-size:20px; text-align: center">
					<?php $msg = Flash::display(); ?>{$msg}
				</h3>
				<input type="text" class="form-control" placeholder="login" id="login" name="login" title="nom d'utilisateur"/><br/>
				<input type="text" class="form-control" placeholder="nouveau mot de passe" id="mdp" name="mdp" title="mot de passe"/><br/>
				<input type="submit" class="btn btn-lg btn-success" value="Mettre à jour" title="mettre à jour les données du compte"/>
			</form>
		</center>	
</div>
</div>
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Croissant rouge. All Rights Reserved</p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" >
					<a href="admin/index"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
				</li><br/>
				<li>
					<a href="volantaire/index"><span>Gestion des volantaires</span></a>
		        </li><br/>
				<li>
					<a href="bien/index"><span>Gestion des biens</span></a>
		        </li><br/>
				<li>
					<a href="evenement/index"><span>Gestion des événements</span></a>
		        </li><br/>
				<li>
					<a href="categorie/index"><span>Gestion des catégories</span></a>
		        </li><br/>
				<li>
					<a href="donneur/index"><span>Gestion des donneurs</span></a>
		        </li><br/>
				<li>
					<a href="statistique/index"><span>Statistiques</span></a>
		        </li><br/>
				  <li>
					  <a href="admininfo/index"><span>Infos du site</span></a>
				  </li><br/>
				<li>
					<a href="login/logout"><span>Déconnexion</span></a>
		        </li>
			 </ul>
		    </div>
	 </div>
	<div class="clearfix"> 
	</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     
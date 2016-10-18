<!DOCTYPE HTML>
<html>
<head>
<title>Administration</title>
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
<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public///cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/chartinator.js" ></script>


<!--skycons-icons-->
<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
				<center><h1>Gestion des catégories</h1></center>
					<div class="header-left">
							<div class="logo-name">
								<a href="<?php echo static::$conf['base_url']; ?>admin/index">
									<span class="prfil-img"><img src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/images/logo.png"/></span>
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
										<a href="<?php echo static::$conf['base_url']; ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/images/p1.png" alt=""></span> 
												<div class="user-name">
													<span>Admin</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="<?php echo static::$conf['base_url']; ?>adminparam/index"><i class="fa fa-cog"></i>paramètres</a> </li>
											<li> <a href="<?php echo static::$conf['base_url']; ?>login/logout"><i class="fa fa-sign-out"></i>déconnexion</a> </li>
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
<div class="inner-block">
<!-- le traitement des données --> 
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
					<a href="<?php echo static::$conf['base_url']; ?>admin/index"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
				</li><br/>
		        <li>
					<a href="<?php echo static::$conf['base_url']; ?>volantaire/index"><span>Gestion des volantaires</span></a>
		        </li><br/>
				<li>
					<a href="<?php echo static::$conf['base_url']; ?>bien/index"><span>Gestion des biens</span></a>
		        </li><br/>
				<li>
					<a href="<?php echo static::$conf['base_url']; ?>evenement/index"><span>Gestion des événements</span></a>
		        </li><br/>
				<li>
					<a href="<?php echo static::$conf['base_url']; ?>categorie/index"><span>Gestion des catégories</span></a>
		        </li><br/>
				<li>
					<a href="<?php echo static::$conf['base_url']; ?>donneur/index"><span>Gestion des donneurs</span></a>
		        </li><br/>
				<li>
					<a href="<?php echo static::$conf['base_url']; ?>statistique/index"><span>Statistiques</span></a>
		        </li><br/>
				  <li>
					  <a href="<?php echo static::$conf['base_url']; ?>admininfo/index"><span>Infos du site</span></a>
				  </li><br/>
				<li>
					<a href="<?php echo static::$conf['base_url']; ?>login/logout"><span>Déconnexion</span></a>
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
		<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/jquery.nicescroll.js"></script>
		<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     
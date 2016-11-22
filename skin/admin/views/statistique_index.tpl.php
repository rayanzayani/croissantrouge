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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<link async href="http://fonts.googleapis.com/css?family=Fredoka%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.leanModal.min.js"></script>
<script type="text/javascript">
        $(function() {
$(".request-consultation").leanModal();
        });
</script>


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

<style>

			*, *:before, *:after { margin: 0; padding: 0; box-sizing: border-box; }
			

			/* You can safely remove the next two lines */
			
			
			
			
			.main { margin: 0 auto; padding: 40px 20px; max-width: 960px; font-size: 19px; line-height: 30px;}
			.main a { color: #DB7580; text-transform: none; }
			
			/* Styling the Popup Window */
			.popup-trigger { display: block; margin: 0 auto; padding: 20px; max-width: 260px; background: #4EBD79; color: #fff;
    						 font-size: 18px; font-weight: 700; text-align: center; text-transform: uppercase; line-height: 24px; cursor: pointer; }
		  	.popup {display: none; position: absolute; top: 100px; left: 50%; width: 700px; height: 400px; margin-left: -350px; padding: 50px 30px;
  					background: #fff; color: #333; font-size: 19px; line-height: 30px; border: 5px solid #150E2D; z-index: 9999;}
  			.popup-mobile {position: relative; top: 0; left: 0; margin: 30px 0 0; width: 100%;}		
  		    .popup-btn-close {position: absolute; top: 8px; right: 14px; color: #4EBD79; font-size: 14px; font-weight: bold; text-transform: uppercase; cursor: pointer;}	
  		</style>
			

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
				<center><h1>Statistiques</h1></center>
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
											<li> <a href="adminparam/index"><i class="fa fa-cog"></i>paramètres</a> </li>
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

<!-- le <track kind="" src="">itement des données --> 
<div>
 </div>

	
		<a class="popup-trigger" style="position:relative;left:-400px;top:100px">Open Pop Up</a>
		
		
		
		<div class="popup">
<div id="piechart" style="width:850px; height: 850px; position:relative;left:450px;"></div>		  <span class="popup-btn-close">close</span>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<script>
		// Popup Window
		var scrollTop = '';
		var newHeight = '100';

		$(window).bind('scroll', function() {
		   scrollTop = $( window ).scrollTop();
		   newHeight = scrollTop + 100;
		});
		
		$('.popup-trigger').click(function(e) {
  		 e.stopPropagation();
		 if(jQuery(window).width() < 767) {
		   $(this).after( $( ".popup" ) );
		   $('.popup').show().addClass('popup-mobile').css('top', 0);
		   $('html, body').animate({
				scrollTop: $('.popup').offset().top
			}, 500);   
		 } else {
		   $('.popup').removeClass('popup-mobile').css('top', newHeight).toggle();
		 };
		});
		
		$('html').click(function() {
		 $('.popup').hide();
		});

		$('.popup-btn-close').click(function(e){
		  $('.popup').hide();
		});

		$('.popup').click(function(e){
		  e.stopPropagation();
		});
		</script>




</div>
</div>
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Croissant rouge. All Rights Reserved</p>
</div>	
<!--COPY rights end here-->


<?php
    $con = mysqli_connect("localhost", "root", "", "croissant")
    or die ("Could not connect to server\n"); 


 $janvier="SELECT count(*) as total from volantaire where Month(dateAj)='01'";
  $Fevrier="SELECT count(*) as total from volantaire where Month(dateAj)='02'";
   $Mars="SELECT count(*) as total from volantaire where Month(dateAj)='03'";
    $Avril="SELECT count(*) as total from volantaire where Month(dateAj)='04'";
    $Mai="SELECT count(*) as total from volantaire where Month(dateAj)='05'";
     $Juin="SELECT count(*) as total from volantaire where Month(dateAj)='06'";
      $Juillet="SELECT count(*) as total from volantaire where Month(dateAj)='07'";
       $Aout="SELECT count(*) as total from volantaire where Month(dateAj)='08'";
        $Septembre="SELECT count(*) as total from volantaire where Month(dateAj)='09'";
         $Octobre="SELECT count(*) as total from volantaire where Month(dateAj)='10'";
          $Novembre="SELECT count(*) as total from volantaire where Month(dateAj)='11'";
           $Decembre="SELECT count(*) as total from volantaire where Month(dateAj)='12'";

           $test="SELECT count(*) as total from members";
           $test2="SELECT count(*) as total from payment";
            

$result=mysqli_query($con,$janvier);
$data=mysqli_fetch_assoc($result);
$one=$data['total'];

$result=mysqli_query($con,$Fevrier);
$data=mysqli_fetch_assoc($result);
$two=$data['total'];

$result=mysqli_query($con,$Mars);
$data=mysqli_fetch_assoc($result);
$three=$data['total'];

$result=mysqli_query($con,$Avril);
$data=mysqli_fetch_assoc($result);
$four=$data['total'];

$result=mysqli_query($con,$Mai);
$data=mysqli_fetch_assoc($result);
$five=$data['total'];

$result=mysqli_query($con,$Juin);
$data=mysqli_fetch_assoc($result);
$six=$data['total'];

$result=mysqli_query($con,$Juillet);
$data=mysqli_fetch_assoc($result);
$seven=$data['total'];

$result=mysqli_query($con,$Aout);
$data=mysqli_fetch_assoc($result);
$eight=$data['total'];

$result=mysqli_query($con,$Septembre);
$data=mysqli_fetch_assoc($result);
$nine=$data['total'];

$result=mysqli_query($con,$Octobre);
$data=mysqli_fetch_assoc($result);
$ten=$data['total'];

$result=mysqli_query($con,$Novembre);
$data=mysqli_fetch_assoc($result);
$eleven=$data['total'];

$result=mysqli_query($con,$Decembre);
$data=mysqli_fetch_assoc($result);
$twelve=$data['total'];


/*
echo '
<div  id="title" class="glitch" data-text="GLITCH">Total 57</div>';*/



?>


<script type="text/javascript">
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
    
   function drawChart() {
  
     var data = google.visualization.arrayToDataTable([
       ['Volontaire', 'Par mois '],
         ['Janvier',     <?php $one ?>],
       ['Fevrier',     <?php $two ?>],
       ['Mars',      <?php $three ?>],
       ['Avril',  <?php $four ?>],
       ['Mai', <?php $five ?>],
       ['Juin',    <?php $six ?>],
       ['Juillet',<?php $seven ?>],
 ['Aout',     <?php $eight ?>],
 ['Septembre',     <?php $nine ?>],
 ['Octobre',     <?php $ten ?>],
 ['Novembre',     <?php $eleven ?>],
 ['Decembre',     <?php $twelve ?>],
     ]);
  
     var options = {
      title: 'Statistique inscription des volontaires'
     };
  
     var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  
     chart.draw(data, options);
   }
 </script>

</div>
</div>

<!--slider menu-->
    <div class="sidebar-menu">		  
		    <div class="menu" style="margin-top:-20px">
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
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
				<center><h1>Gestion des donneurs</h1></center>
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
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!-- le traitement des données --> 

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
	<h3 style="color:#45C326; text-size:20px; text-align: center">
			<?php $msg = Flash::display(); ?><?php echo $msg; ?>
		</h3>
	<form method="post" action="addDon" name="f" onsubmit="return validate()">
		<h3 style="color:#45C326; text-size:20px; text-align: center">
			<?php $msg = Flash::display(); ?><?php echo $msg; ?>
		</h3>
        <br/><br/><br/>
		<input class="form-control" type="text" placeholder="CIN"  maxlength="8" minlength="8"  name="cin" required="" onKeypress="verifInt()" /><br/>
		<input class="form-control" type="text" placeholder="nom"  maxlength="30" name="nom" required="" onKeypress="verifPhrase()"/><br/>
		<input class="form-control" type="text" placeholder="prenom"  maxlength="30" name="prenom" required="" onKeypress="verifPhrase()"/><br/>
		<input class="form-control" type="date" placeholder="date de naissance" name="dateNaiss" required=""/><br/>
		<input class="form-control" type="text" placeholder="email"  maxlength="50" name="email" required="" onKeypress="verifMail()"/><br/>
		<input class="form-control" type="text" placeholder="N° téléphone"  maxlength="8" minlength="8" name="tel" required="" onKeypress="verifPhonee()" /><br/>
		<select class="form-control" title="séléctionner l'identificateur du bien!">
			<?php $counter1=-1;  if( isset($bien) && ( is_array($bien) || $bien instanceof Traversable ) && sizeof($bien) ) foreach( $bien as $key1 => $value1 ){ $counter1++; ?>
			<option>
				<?php echo $value1->id; ?>
			</option>
			<?php } ?>
		</select><br/>
		<input class="btn btn-lg btn-primary" type="submit" value="Ajouter donneur" title="cliquer ici pour ajouter un donneur" />
	</form><br/>
	<form method="post" action="../donneur/index">
	<div class="search-box">
		<input type="text" placeholder="filtrer selon email..." name="filtre" id="filtre" /><input type="submit" value=""/>
	</div>
	</form><br/>

	<table class="table">
		<thead>
		<tr>
			<th width="10%">Id</th>
			<th width="10%">CIN</th>
			<th width="10%">Nom</th>
			<th width="10%">Prénom</th>
			<th width="15%">Date de naissance</th>
			<th width="10%">Email</th>
			<th width="10%">N° tél</th>
			<th width="5%">Supprimer</th>
		</tr>
		</thead>
		<tbody>
		<?php $counter1=-1;  if( isset($don) && ( is_array($don) || $don instanceof Traversable ) && sizeof($don) ) foreach( $don as $key1 => $value1 ){ $counter1++; ?>
		<tr>
			<td><?php echo $value1->id; ?></td>
			<td><?php echo $value1->cin; ?></td>
			<td><?php echo $value1->nom; ?></td>
			<td><?php echo $value1->prenom; ?></td>
			<td><?php echo $value1->dateNaiss; ?></td>
			<td><?php echo $value1->email; ?></td>
			<td><?php echo $value1->tel; ?></td>
			<td><center><a href="<?php echo static::$conf['base_url']; ?>donneur/del/<?php echo $value1->id; ?>" title="Supprimer"><img src="<?php echo static::$conf['base_url']; ?>/skin/admin/public/basket.png"/></a><center></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>

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
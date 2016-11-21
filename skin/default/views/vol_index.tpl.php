<!DOCTYPE html>
<html>
<head>
    <title>S'inscrire</title>
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
                    <li><a href="about/index">A propos</a></li>
                    <li><a href="events/index">Evénements</a></li>
                    <li><a class="active" href="vol/index">S'inscrire</a></li>
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
<!--banner start here-->
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
<div class="banner">
    <div class="vol" align="center">
        <h1>Inscrivez-vous</h1><br/>
        <form name="f" method="post" action="../vol/ajoutVol" onsubmit="return validate()">
            <h3 style="color:#0B29C1; text-size:20px; text-align: center">
                <?php $msg = Flash::display(); ?>{$msg}
            </h3>
            <input type="text" name="cin" id="cin" maxlength="8" minlength="8" placeholder="N° catre d'identité" onKeyPress="verifPhonee()" required="" title="n° de carte d'identité"/><br/>
            <input type="text" name="nom" id="nom" placeholder="nom" maxlength="30" onKeyPress="verifPhrase()" required="" title="votre nom"/><br/>
            <input type="text" name="prenom" id="prenom" maxlength="30" placeholder="prénom" onKeyPress="verifPhrase()" required="" title="votre prénom"/><br/>
            <input type="date" name="dateNaiss" id="dateNaiss" placeholder="jj/mm/yy" onkeypress="verifDate()" required="" title="votre date de naissance"/><br/>
            <input type="email" name="email" id="email" placeholder="exemple@yahoo.fr" onkeypress="verifMail()" required="" title="votre addresse mail"/><br/>
            <input type="text" name="tel" id="tel" maxlength="8" minlength="8" placeholder="votre n° de téléphone" onKeyPress="verifPhonee()" required="" title="votre n° de téléphone"/><br/>
            <input type="submit" value="S'inscrire"/>
        </form>
    </div>
</div>

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
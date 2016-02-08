<?php
include("CoBdd.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Asap_400.font.js" type="text/javascript"></script>
    <script src="js/Asap_italic_400.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script> 
    <script src="js/jquery.cycle.all.js" type="text/javascript"></script>
	<script>
		$('#banners')
			.cycle({ 
				fx: 'fade', 
				delay: 7000 ,
				timeout: 7000,
				manualTrump:false,
				cleartypeNoBg: true,
				next: '#next',
				prev: '#prev'
			});
	</script>     
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
	<div class="main">
        <!--==============================header=================================-->
       <?php
include("include/header.php");
?>
                        <div class="wrapper">
                            <div id="banners" class="border-bot">
                                <div>
                                    <strong class="title-1">Votre Région</strong>
                                    <strong class="title-2">Toute l'information c'est ici!</strong>
                                </div>
                                <div>
                                    <strong class="title-1">Votre Pays</strong>
                                    <strong class="title-2">Vous tenir au courant !</strong>
                                </div>
                                <div>
                                    <strong class="title-1">Le Monde</strong>
                                    <strong class="title-2">L'actualité sur le monde entier!</strong>
                                </div>
                            </div>
                            <a id="prev" href="#">prev</a>
                            <a id="next" href="#">next</a>
                        </div>
                    </div>
                </div>
                <article class="grid_3">
                    <div class="box">
                        <figure><a href="regional.php"><img src="images/régional.jpg" alt=""></a></figure>
                        <div class="padding">
                            <strong class="title-3 color-1">Regional</strong>
                            <a class="link" href="regional.php">Toutes les actualité sur notre belle région, le Poitou-Charentes.</a>
                        </div>
                    </div>
                </article>
                <article class="grid_3">
                    <div class="box">
                        <figure><a href="nationale.php"><img src="images/national.jpg" alt=""></a></figure>
                        <div class="padding">
                            <strong class="title-3 color-2">National</strong>
                            <a class="link" href="nationale.php">Toute les actualité sur le pays</a>
                        </div>
                    </div>
                </article>
                <article class="grid_3">
                    <div class="box">
                        <figure><a href="internationale.php"><img src="images/international.jpg" alt=""></a></figure>
                        <div class="padding">
                            <strong class="title-3 color-3">International</strong>
                            <a class="link" href="internationale.php">Toute les actualité sur le monde</a>
                        </div>
                    </div>
                </article>
               

                <div class="clear"></div>
            </div>
        </header>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 13, 2012!</div>
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_4">
                        <div class="indent-right">
                            <div class="maxheight img-indent-bot">
                                <h3>Welcome!</h3>
                                <p>Guide.com is one of <a class="link" target="_blank" href="http://blog.templatemonster.com/free-website-templates/ ">free website templates</a> created by TemplateMonster.com. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
                                This <a class="link" href="http://blog.templatemonster.com/2012/02/13/free-website-template-jquery-cycle-slider-business/" target="_blank" rel="nofollow">Guide.com Template</a> goes with two pack ages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com. The basic package (without PSD source) is available for anyone without registration.
                            </div>
                            <a class="button" href="#">More</a>
                        </div>
                    </article>

                    <article class="grid_4">
                    	<div class="indent-left">
                        	<div class="maxheight img-indent-bot">
                                <h3 class="p1">Our Services</h3>
                                <ul class="list-1">
                                    <li><a href="#">Création de votre Site Web</a></li>
                                    <li><a href="#">Création de Base de données</a></li>
                                    <li><a href="#">Création de Template</a></li>
                                    <li><a href="#">Création de Page Web</a></li>
                                </ul>
                            </div>
                         
                        </div>
                    </article>
                </div>
            </div>
          </section>
        
        <!--==============================footer=================================-->
        <footer>
        	<div class="inner">
            	<div class="footer-bg">
                	Guide.com &copy; 2012
                    <span>Website Template by <a class="link" href="http://store.templatemonster.com?aff=netsib1" target="_blank" rel="nofollow">TemplateMonster.com</a></span>
                </div>
            </div>
        </footer>
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>



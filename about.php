<?php
include("Cobdd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Qui sommes nous ?</title>
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
				timeout: 30000,
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
<body id="page2">
	<div class="main">
        <!--==============================header=================================-->
        <?php
include("include/header.php");
?>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 13, 2012!</div>
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_3">
                    	<div class="indent-right">
                        	<div class="maxheight img-indent-bot">
                                <h3>A propos de nous</h3>
                                <p><span class="color-5">L'Actu.com:</span> Nous sommes 3 amis actuellement en 2 ème année d'une licence informatique. On est situés à La Rochelle pour nos études. Nous avons entre 19 et 20ans, passionnés d'informatique depuis tout petit, on voulait montrer nos capacités d'informaticiens. .</p>
                                <p>Pour ce Projet nous avons décidé de faire un site sur les actualités du moment. On a fait 3 rubriques : régional, national et international. Ensuite nous avons fait un espace profil et commentaire pour les abonnées du site.</p>
                            </div>
                           
                        </div>
                    </article>
                    <article class="grid_8">
                    	<div class="indent-left2">
                        	<div class="maxheight img-indent-bot">
                            	<h3>Notre Equipe de Projet</h3>
                                <div class="wrapper prev-indent-bot">
                                	<figure class="img-indent"><img src="images/tom.jpg" alt=""></figure>
                                    <div class="extra-wrap">
                                    	<h6>Thomas PEPPER</h6>
                                        J'ai réalisé la partie régionale et la partie internationale des actualités, de plus j'ai trié les flux et organisé les différentes sources à notre disposition et pour finir j'ai réalisé une partie de la base de données.
                                    </div>
                                </div>
                                <div class="wrapper prev-indent-bot">
                                	<figure class="img-indent"><img src="images/flo.jpg" alt=""></figure>
                                    <div class="extra-wrap">
                                    	<h6>Florian RAISON</h6>
                                        J'ai réalisé la partie nationale et aussi la parti internationale de l'actualité, je me suis occupé de la mise en ligne du site et j'ai aussi travaillé sur le tri des flux et des sources mise à notre disposition. De plus j'ai corrigé toutes les fautes d'orthographe du site.
                                    </div>
                                </div>
                                <div class="wrapper">
                                	<figure class="img-indent"><img src="images/alex.jpg" alt=""></figure>
                                    <div class="extra-wrap">
                                    	<h6>Alexandre BONNIFAIT</h6>
                                        J'ai réalisé la partie graphique du site, de plus j'ai codé les pages annexes du site (page contact, page profil, Administration) et pour finir j'ai travaillé sur la sécurité du site.
                                    </div>
                                </div>
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
                    <span>Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster.com</a></span>
                </div>
            </div>
        </footer>
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

<?php
include("Cobdd.php");
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <title>Profil</title>
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
<body id="page4">
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
            </div>
        </header>
        
        <!--==============================content================================-->


        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 13, 2012!</div>
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_12">
                    	<h3>Votre Profil</h3>
                        <div class="wrapper">
                        	

<?php 
        $p = $bdd->query("SELECT * FROM inscription WHERE Id=".$_SESSION['Id']."")->fetch();
        

           
                $age= date('Y-m-d')-$p['DateNaiss'];
                 
                //Affichage des différentes informations du profile.
                echo '<li id="profil">
                        
                            <h4>Nom : '.$p['Nom'].'</h4>
                            <h4>Prénom : '.$p['Prenom'].'</h4>
                            <h4>Pseudo : '.$p['Pseudo'].'</h4>
                            <h4>Age : '.$age.' ans <h4>
                        
                      </li>' ;  

            
         ?>
    <article>
    <h3>Articles aimés</h3>
<?php
        $a2=$bdd->query('SELECT * FROM article_like WHERE id_user='.$_SESSION['Id'].' LIMIT 0,4');


 
    while ($a=$a2->fetch()) {
    
    
        echo '<li class="article">
            <article>
               Article : <a href='.$a['url_article'].'>'.$a['url_article'].'</a>
            </article>
            </li>';
           }    
?>
                              

                        </article>
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
                    <span><a class="link" target="_blank" href="http://www.templatemonster.com/" rel="nofollow">Website Template</a> by TemplateMonster.com</span>
                </div>
            </div>
        </footer>
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

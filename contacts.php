<?php
include("Cobdd.php");
?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
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
<body id="page5">
	<div class="main">
        <!--==============================header=================================-->
        <header>
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
        </header>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 13, 2012!</div>
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_8">
                    	<div class="indent-right">
                        	<h3 class="prev-indent-bot">Formulaire de contact</h3>
                            <form id="contact-form" method="post" enctype="multipart/form-data">                    
                                <fieldset>
                                      <label><span class="text-form">Nom :</span><input name="name" type="text" /></label>
                                      <label><span class="text-form">Email:</span><input name="email" type="text" /></label>                              
                                      <label><span class="text-form">Téléphone :</span><input name="phone" type="text" /></label>                              
                                      <div class="wrapper">
                                        <div class="text-form">Message :</div>
                                        <div class="extra-wrap">
                                            <textarea></textarea>
                                            <div class="clear"></div>
                                            <div class="buttons">
                                                <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Nettoyé</a>
                                                <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Envoyé</a>
                                            </div> 
                                        </div>
                                      </div>                            
                                </fieldset>						
                            </form>
                        </div>
                    </article>
                    <article class="grid_3">
                    	<div class="indent-left3">
         
                            <figure class="indent-bot">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5529.138290899344!2d-1.1615884000000152!3d46.139411700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153c5de1fa1eb%3A0x3adbb1a0650d8f5d!2s120+Rue+de+Coureilles%2C+17000+La+Rochelle!5e0!3m2!1sen!2sfr!4v1425479058346" width="400" height="300" frameborder="0" style="border:0"></iframe>
							
                            </figure>
                            <dl>
                                <dt>120 rue de coureilles, La Rochelle</dt>
                                <dd><span>Téléphone:</span>0617209717;</dd>
                                <dd><span>E-mail:</span><a href="#">tomjpepper@gmail.com</a></dd>
                            </dl>

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

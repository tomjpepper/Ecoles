<?php
include("Cobdd.php");

/* On vérifie si un formulaire à été envoyé et si les champs ont été remplies */
if (isset($_POST['Pseudo']) && $_POST['Pseudo'] && isset($_POST['Mdp']) && $_POST['Mdp']) {
	$Pseudo = htmlspecialchars($_POST['Pseudo']);
	$Mdp = md5(htmlspecialchars($_POST['Mdp']));

	
	$dataU = $bdd->query('SELECT * FROM inscription WHERE Pseudo="'.$Pseudo.'" AND Mdp="'.$Mdp.'"');
	if ($d = $dataU->fetch()) { // Est-ce que la requête renvoie quelque chose ?

		$_SESSION['Nom'] = $d['Nom'];
		$_SESSION['Prenom'] = $d['Prenom'];
		$_SESSION['Id'] = $d['Id'];
		
		header('location:index.php'); exit ;
	}
	else $mess = 'Vos identifiants sont incorrect'; // Le message d'erreur est mis dans une variable

}


?>
<!DOCTYPE html>
<html>
	<head>

    <title>Connexion</title>
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

	
	
	

	
	<title> Incription</title>
</head>
<body>
<header>
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
<nav>	
    
	<ul id="menu">
		<li id="Acc"><a href="index.php">Accueil</a></li>
	</ul>
	
</nav>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<section id="Connec">
	<header id="Identification"><h2>Identification</h2></header>
	<?php if (isset($mess)) echo '<p>'.$mess.'</p>'; // Affichage de l'éventuel message d'erreur ?>
	
	<?php if (!isset($_SESSION['Nom'])) { // Si l'utilisateur est connecté ?>
	<form id="Connexion" action="Connexion.php" method='post'>
		<p><label>Pseudo*</label>	<input type="text" name="Pseudo" maxlength="250" placeholder="Pseudo" required ='required'></p>
		<p><label>Mot de passe*</label><input type="password" name="Mdp" maxlength="20" placeholder="Mot de passe"></p>
		<p><input type="submit" value="Connexion"></p>


		<p>*Champs Obligatoires.</p>
	</form>		
	<?php }
	else echo 'Bonjour '.$_SESSION['Prenom'].' '.$_SESSION['Nom'].' content de vous revoir '; 
	?>
</section>


</body>
</html>
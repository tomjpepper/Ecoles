

<?php
include('Cobdd.php');
?>


<?php



if (isset($_POST['Nom'])  && isset($_POST['Prenom']) && isset($_POST['Pseudo']) && isset($_POST['Email']) && isset($_POST['Mdp'])  && isset($_POST['DateNaiss']) ) {
	


// Je securise les données 
	$nom = htmlspecialchars($_POST['Nom']);
	$prenom = htmlspecialchars($_POST['Prenom']);
	$pseudo = htmlspecialchars($_POST['Pseudo']);
	$mdp = htmlspecialchars($_POST['Mdp']);
	$mdp =md5($mdp);
	$email = htmlspecialchars($_POST['Email']);
	$dateNaiss = htmlspecialchars($_POST['DateNaiss']);

	

	if ($nom && $prenom && $pseudo && $mdp && $dateNaiss ) {
			if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
				 $data= $bdd->query('INSERT INTO inscription VALUES("","'.$nom.'","'.$prenom.'","'.$pseudo.'","'.$email.'","'.$mdp.'","'.$dateNaiss.'","0") ' ) ;
				if ($data) {	
					$message = "Bienvenue";
					header('location:index.php'); exit ;
					
					}
				else 
					$message = "La requête n'a pas fonctionner";

			}
			else  
				$message = "Email est incorecte";

	}
	else
		$message = "Tout les champs ne sont pas tous remplit";
		
}



 ?>


<!doctype html>
<html>


	<head>

    <title>Inscription</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<nav>	
    
	<ul id="menu">
		<li id="Acc"><a href="index.php">Accueil</a></li>
	</ul>
	
</nav>			


	<h1 id='formulaire'> Formulaire d'incription </h1>
<?php if (isset($message)) echo '<p>'.$message.'</p>'; //Affichage d'un eventuel message?> 

<?php if (!isset($_SESSION['Nom'])) { // Si l'utilisateur est inscrits ?>
<form action="Incription.php" method="post" >
		<fieldset>
			<ul id ="inscription">
				<li>
					<label for="name" > Nom </label>
					<input type="text" id="name"  name="Nom" placeholder="Nom" required="required"/> 
				</li>
				<li>
					<label for="name" > Prénom </label>
					<input type="text"  name="Prenom" placeholder="Prenom"   required="required"> 
				</li>
				<li>
					<label for="name" > Pseudo </label>
					<input type="text" name="Pseudo" placeholder="Pseudo"   required="required"> 
				</li>
				<li>
					<label for="mail" > Email </label>
					<input type="text" name="Email" placeholder="votre@dresse.fr" required="required" /> 
				</li>
				<li>
					<label for="Passeword" > Mot de Passe </label>
					<input type="Password" id="Password" name="Mdp" placeholder="Mot de passe"  required="required" /> 
				</li>
				<li>
					<label for="date" > DateNaiss </label>
					<input type="date" name="DateNaiss"/> 
				</li>

				<input type="submit"  value="Valider"   />
				
			</ul>
		</fieldset>

		
	</form>
	<?php }
	?>

</body>

</html>
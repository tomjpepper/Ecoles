<?php 
include('../Cobdd.php');
?>

<?php
if (isset($_SESSION['Id'])) { //Vérifie si l'utilisateur est conecté.
	$u=$bdd->query('SELECT * FROM inscription WHERE Id ="'.$_SESSION['Id'].'"')->fetch() ;
if($u['Admin'] == 1)	{ // Vérifie sur l'utilisateur à les droit d'accés à l'administration.


		

// Si un formulaire est envoyé
if (isset($_POST['Titre']) && isset($_POST['Auteur']) && isset($_POST['Role']) && isset($_POST['description'])  && isset($_POST['categorie'])) {
	
	// Sécurisation des données
	$Titre = htmlspecialchars($_POST['Titre']);
	$Auteur = htmlspecialchars($_POST['Auteur']);
	$Role = htmlspecialchars($_POST['Role']);
	$description = htmlspecialchars($_POST['description']);
	$categorie = (int)$_POST['categorie'];
	
	
	// Gestion du fichier envoyé (avec vérification de l'extension)
	
	if ($_FILES['image']['size'] <= 1000000) {
		$infosfichier = pathinfo($_FILES['image']['name']);
		$extension_upload = $infosfichier['extension'];
		$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');


		$lien = 'image/'.basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], '../'.$lien);

		
	}
	
	// On vérifie si la catégorie envoyé par le formulaire existe dans la BDD
	$c = $bdd->query('SELECT * FROM categorie WHERE Id="'.$categorie.'" ')->fetch();
	$nbCategories = $c[0];
	
	// On vérifie si tout est bon à être insérer
	if ($Titre && $Auteur && $Role && $description && $nbCategories > 0 && $lien) {
		

		if ($c['Id']==1) {	
			// Si l'id de categorie est égale à 1 dans ce cas la l'insertion ce fera dans la table film.
	 		$bdd->query('INSERT INTO film VALUES("", "'.$Titre.'","'.$Auteur.'","'.$Role.'", "'.$description.'", "'.$categorie.'", "'.$lien.'") ');
				$mess = 'Enregistrement réussi ';
				header('location:../index.php');

			}
		
		 // Sinon dans ce cas la l'insertion ce fera dans la table serie.
		 else $bdd->query('INSERT INTO serie VALUES("", "'.$Titre.'","'.$Auteur.'","'.$Role.'", "'.$description.'", "'.$categorie.'", "'.$lien.'") ');
		

	
			}

	else $mess = 'Il manque des informations';
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Administration</title>
	
	<link rel="stylesheet" type="text/css" href="css/styleAdmin.css">
	<link href="css/style-mobile.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<h1> Administration </h1> 

<?php 
// Affichage de l'éventuel message d'erreur
if (isset($mess)) echo '<p>'.$mess.'</p>'; 
?>

<h3>Ajout d'un Film ou d'une Serie de Simon Baker</h3>

<!-- Formulaire d'ajout d'article -->
<form action="Admin.php" method="post" enctype="multipart/form-data">
	<p><label for="Titre">Titre:</label> <input id="Titre" type="text" name="Titre"></p>
	<p><label for="Auteur">Auteur:</label> <input id="Auteur" type="text" name="Auteur"></p>
	<p><label for="Role">Role:</label> <input id="Role" type="text" name="Role"></p>
	<p><label for="description">Description:</label> <input id="description" type="text" name="description"></p>
	<p><label for="categorie">Catégorie:</label> <select name="categorie">
							<?php
							$categories = $bdd->query('SELECT * FROM categorie');
							while ($c = $categories->fetch()) {
								echo '<option value="'.$c['Id'].'">'.$c['Nom'].'</option>';
							}
							?>
						     </select></p>
	<p><label for="image">Image:</label> <input id="image" type="file" name="image"></p>
	<p><input type="submit" value="Enregistrer"></p>
	</div>

</body>
</html>

<?php
 

			}

		else 	header('location:../index.php');
	}

	else header('location:../index.php') ;

			
	
?>
 
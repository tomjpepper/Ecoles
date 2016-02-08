<?php
session_start(); // Démarrage du système de session

/* Connexion à la base de donnée */
try {
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=actu', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
			
			?>
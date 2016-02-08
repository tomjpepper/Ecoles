<?php
include("CoBdd.php"); 

if (isset($_POST['url_article']) ){ // et session

	$url_article = htmlspecialchars($_POST['url_article']);

	if($url_article){

	$c= $bdd->query('SELECT COUNT(*) FROM article_like WHERE id_user='.$_SESSION['Id'].' AND url_article = "'.$link.'" ')->fetch();

	if($c[0]==0) {
		// Compter nombre d'article: if ($c == 0)
		$data=$bdd->query('INSERT INTO article_like VALUES('.$_SESSION['Id'].',"'.$url_article.'")');
	}

	else 
		echo "Ne fonctionne pas";

}
	else 
		echo "Ne marche pas";
}
?>
<?php
include("rsslib.php");
?>


<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name="robots" content="none" />
<title>Actus Internationales</title></head>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
	
<body>
<?php
include("include/header.php");
?>
<h1>Actus :</h1>


<fieldset class="rsslib">
<?php
	
	$url = "http://france3-regions.francetvinfo.fr/poitou-charentes/actu/rss";
	echo RSS_Display($url, 15, false, true);
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="rsslib.js"></script>
</fieldset>
</body>
</html>

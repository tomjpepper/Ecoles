<?php
session_start();
if (isset($_SESSION['Nom'])) session_destroy();
header('location:index.php'); exit;
?>

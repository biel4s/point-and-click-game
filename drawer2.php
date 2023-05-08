<?php
	session_start();
	$_SESSION['x']=2;
	header('Location: game.php');
	exit;
?>

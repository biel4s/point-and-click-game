<?php
	session_start();
	$_SESSION['x']=5;
	header('Location: game.php');
	exit;
?>

<?php
	session_start();
	$_SESSION['x']=4;
	header('Location: game.php');
	exit;
?>

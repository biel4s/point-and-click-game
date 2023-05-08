<?php
	session_start();
	$_SESSION['x']=1;
	header('Location: game.php');
	exit;
?>

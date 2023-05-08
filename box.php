<?php
	session_start();
	$_SESSION['x']=3;
	header('Location: game.php');
	exit;
?>

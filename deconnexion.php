<?php
// On active les sessions :
	session_start();
 
	session_destroy();
 
// On redirige le visiteur vers la page désirée :
	header('Location: ./login.php');
	exit();
?>
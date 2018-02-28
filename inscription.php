<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
	<?php include "index.php";?>

	<h1>Sign Up</h1>
	<h2>Pseudo</h2>
	<form method="POST" action="inscription.php">
		<input type="text" name="pseudo" placeholder="Pseudo" required="text">

		<h2>Créer votre mot de passe</h2>
		<input type="password" name="mdp" placeholder="Mot de passe" required="text">

		<h2>Retapez votre mot de passe</h2>
		<input type="password" name="mdp2" placeholder="Mot de passe" required="text">

		<button type="submit">Save</button>
	</form>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "antoine";
	$dbname = "projetphp";

            // Créer la connection
	$connection = new mysqli($servername, $username, $password, $dbname);


            // requete
	if($_POST){

		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
		$mdp2 = $_POST['mdp2'];

		$requete = "SELECT pseudo FROM inscription WHERE pseudo ='$pseudo' ";
		$resultat = mysqli_query($connection, $requete) or die ('ERREUR SQL : ' . $requete . mysqli_error($connection));

		if ($resultat -> num_rows === 0){

			if($mdp === $mdp2){
				$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
				echo "Inscription réussi";
				$requete = "INSERT INTO inscription VALUES(NULL, '$pseudo', '$mdp')";
				$resultat = mysqli_query($connection, $requete) or die('ERREUR SQL : '. $requete . mysqli_error($connection));
			}else{
				echo "mot de passe incorrect";
			}
		}else{
			echo "Pseudo invalide";
		}


	}
	?>	
	<script src="app.js"></script>
</body>

</html>
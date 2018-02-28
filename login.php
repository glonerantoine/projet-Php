<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
	<?php include "index.php"; ?>

	<h1>Login</h1>

	<h2>Pseudo</h2>
	<form method="POST" action="">
		<input type="text" name="pseudo_login" placeholder="Pseudo" required="text">
		<h2>Password</h2>
		<input type="password" name="password_login" placeholder="Password" required="text">
		<button type="submit">connect</button>
		<?php
            // requete
		if(!empty($_POST)){
			$servername = "localhost";
			$username = "root";
			$password = "antoine";
			$dbname = "projetphp";

            // Créer la connection
			$connection = new mysqli($servername, $username, $password, $dbname);

			$pseudo = $_POST['pseudo_login'];
			$mdp = $_POST['password_login'];


			$requete1 = "SELECT * FROM inscription WHERE pseudo ='$pseudo' ";
			$requete2 = "SELECT * FROM inscription WHERE motdepasse ='$mdp' ";

			$resultat1 = mysqli_query($connection, $requete1) or die ('ERREUR SQL : ' . $requete1 . mysqli_error($connection));
			$resultat2 = mysqli_query($connection, $requete2) or die ('ERREUR SQL : ' . $requete2 . mysqli_error($connection));


			$row = mysqli_fetch_array($resultat1);
			if (($resultat1 -> num_rows) && ($resultat2-> num_rows)){
				if (password_verify($row['mdp'])) {
				echo "vous etes connectés";
				header('Location: /home.php');
}
			}else{
				echo "Pseudo ou/et mot de passe incorrect";
			}
		}
			?>	
		</form>
		<script src="app.js"></script>
	</body>
	</html>
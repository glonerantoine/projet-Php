<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
	<?php include "index.php"; ?>
	<div id="contact">	


		<h1>Contact</h1>

		<form action="contact.php">


			<p>Objet :</p>
			<input required="text" type="text" name="objet" placeholder="Mail">

			<p>Message :</p>
			<textarea required="textarea" placeholder="Votre Message" name="message"></textarea>
			<br />

			<select name="thematique">
				<option value="thematique" selected="thematique">Thématique</option>
				<option value="valeur1">Valeur 1</option>
				<option value="valeur2">Valeur 2</option>
			</select>
			<br />
			<p>Avez vous un compte utilisateur ?</p>

			<input type="radio" name="compte" value="1" checked>Oui
			<input type="radio" name="compte" value="2">Non
			<br />
			<input type="date" name="date" placeholder="Votre age">

			<button type="reset">Effacer</button>
			<button type="submit">Ok</button>


			<?php

			$servername = "localhost";
			$username = "root";
			$password = "antoine";
			$dbname = "projetphp";
            //variables pour récupérer les données
            // $objet = $_POST['objet'];
            // $message = $_POST['message'];
            // $thematique = $_POST['thematique'];
            // $compte = $_POST['compte'];
            // $age = $_POST['age'];
            // Créer la connection
			$connection = new mysqli($servername, $username, $password, $dbname);
            // Checker la connection

            //on fait notre requète
			if ($_POST) {

				$mail = $_POST['objet'];
				$message = $_POST['message'];
				$date = $_POST['date'];
				$thema = $_POST['thematique'];
				$compte = $_POST['compte'];
				$interdit= $_POST["objet"];
				$pos = stripos($interdit, 'simplon');
				if($pos !== false){
					echo "Mot non valide";
				}
				$requete = "INSERT INTO contact VALUES(NULL, '$mail', '$message', '$thema', '$compte', '$date')";
				$resultat = mysqli_query($connection, $requete) or die('ERREUR SQL : '. $requete . mysqli_error($connection));
			}
			?>

		</form>
	</div>
	<script src="app.js"></script>
</body>

</html>
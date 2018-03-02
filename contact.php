<?php session_start(); ?>
<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
	<?php include "home.php";
	include "config.php"; ?>
	<div id="contact">	


		<h1>Contact</h1>

		<form action="contact.php" method="POST">
			


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

            //on fait notre requète
			if (!empty($_POST)) {

				$mail = $_POST['objet'];
				$message = $_POST['message'];
				$date = $_POST['date'];
				$thema = $_POST['thematique'];
				$compte = $_POST['compte'];

				$pos = stripos($mail, 'simplon');
				if($pos !== false){
					echo "Mot non valide";
				}else{
					echo "votre message a été enregistré";

					 // Checker la connection

            if ($connection->connect_error) {
                die('Connection failed: '.$connection->connect_error);
				}
				
				$requete = "INSERT INTO contact VALUES(NULL, '$mail', '$message', '$thema', '$compte', '$date')";
				$resultat = mysqli_query($connection, $requete) or die('ERREUR SQL : '. $requete . mysqli_error($connection));
			}	
			}
			?>

    </form>
	</div>
	<script src="app.js"></script>
</body>

</html>

<?php session_start(); ?>
<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
	<?php include "home.php"; ?>
	<?php include "config.php" ; ?>
		

<?php 
$id = $_GET['id'];

	$request = $connection->query("SELECT * FROM Blog WHERE id='$id'");// je récupere tout mes tableaux de ma BDD
	     
            while ($row = $request->fetch_assoc())//fetch_assoc met les éléments dans un array
            {

            	echo '<div class="articles">';

            echo '<h2>'.$row["titre"].'</h2>';//je récupère dans l'array ce qui m'intéresse
            echo '<img src="'.$row["image"].'">';
            echo '<p>'.$row["intro"].'</p>';
            echo '<p>'.$row["date"].'</p>';
            echo '<p>'.$row["texte"].'</p>';
            echo '</div>';	} ?>	
</body>
</html>	
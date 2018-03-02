<?php session_start(); ?>
<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
	<?php include "home.php" ?>
	<?php include "config.php" ?>

	<h1>Evenements</h1>
<?php	
$request = $connection->query("SELECT * FROM evenement WHERE date_fin >= CURRENT_DATE ORDER BY lieu ASC"); // Descendant = DESC
			 
			       	
			              
            while ($row = $request->fetch_assoc())//fetch_assoc met les éléments dans un array
            {

            	echo '<div class="articles">';

            echo '<h2>'.$row["titre"].'</h2>';
            //je récupère dans l'array ce qui m'intéresse dans la BDD
            echo '<img src="'.$row["image"].'">';
            echo '<p>'.$row["texte_info"].'</p>';
            echo '<p>'.$row["date_debut"].'</p>';
            echo '<p>'.$row["date_fin"].'</p>';
            echo '<p>'.$row["lieu"].'</p>';
            echo '<p>'.$row["date_publication"].'</p>';
            echo '</div>';
        }
        ?>

	<script src="app.js"></script>
</body>

</html>
<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
<?php include "index.php" ?>	
	<h1>Blog</h1>
<?php

$servername = "localhost";
$username = "root";
$password = "antoine";
$dbname = "projetphp";

           
            // Créer la connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Checker la connection
           
            //on fait notre requète
            $request = $connection->query("SELECT * FROM Blog");       
            while ($row = $request->fetch_assoc())//fetch_assoc met les éléments dans un array
        {

            echo '<div class="articles">';

            echo '<h2>'.$row["titre"].'</h2>';//je récupère dans l'array ce qui m'intéresse
            echo '<img src="'.$row["image"].'">';
            echo '<p>'.$row["intro"].'</p>';
            echo '<p>'.$row["texte"].'</p>';
            echo '<p>'.$row["date"].'</p>';
            echo '</div>';
        }
?>

<script src="app.js"></script>
</body>

</html>
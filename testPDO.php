<?php session_start(); ?>
<!doctype html>
<meta charset="utf-8">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	
	<?php include "home.php";
	include "connectPDO.php" ; 
	?>	
	<h1>Blog</h1>
	<?php 

   //          on fait notre requète
			$request = $connection->query("SELECT * FROM Blog");       
    while ($row = $request->fetch())//fetch_assoc met les éléments dans un array
           {

            	echo '<div class="articles">';

            echo '<h2>'.$row["titre"].'</h2>';//je récupère dans l'array ce qui m'intéresse
            echo '<img src="'.$row["image"].'">';
            echo '<p>'.$row["intro"].'</p>';
            echo '<p>'.$row["date"].'</p>';
            echo '<a href=article.php?id='.$row["id"].'>Lire plus</a>';
            echo '</div>';
         }
        ?>
        <?php
        if(!empty($_SESSION['pseudo'])){
			echo '<a href="creation.php">Ajouter un article</a>';
		}else{
			echo '<a href="inscription.php">Toujours pas inscrit ?</a>';
		}
    
        ?>

        <!-- Quand une personne se connect, il doit pouvoir crée et modifier son article. -->

        <script src="app.js"></script>
    </body>

    </html>
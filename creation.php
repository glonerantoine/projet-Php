<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajout de l'article</title>
</head>
<body>
	<h3>Titre de votre article</h3>
	<input type="text" name="titre">
	<p>Image de présentation</p>
    <img src="" >
    <p>information</p>
    <textarea placeholder="Résumé" name=""></textarea>
	<p>Texte de votre article</p>
    <textarea placeholder="Texte" name="texte"></textarea>
    
    <input type="date" name="date">
    <button type="submit">Crée</button>
   <a href="blog.php">Retour</a>
</body>
</html>
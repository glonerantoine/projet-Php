<?php
// créer une fonction pourcentage

// http://www.zone-webmasters.net/codes-sources/php/49-calculer-un-pourcentage-en-php.html
// Trouvez sur ce site.

function pourcentage($number, $total){
	return $number * 100 / $total; 
	// Le nombre que je multiplie par 100 et qui est ensuite divisé par le total.
}

$pourcent = pourcentage(10, 100);
//10 correspond a 10% de 100
echo $pourcent . '%';

// DEBUG
$valeur1 = 10;
$valeur2 = 20;
$valeur3 = $valeur1 + $valeur2;
//die(); // die permet d'arreter mon script, le echo ne fonctionne pas. Si je retire le die echo refonctionnera.
echo $valeur3;


// Afficher une image en HTML ($src; $alt)
$src = "media/challenger.png";
$src2 = "media/master.png";
$src3 = "media/diamond.png";
$src4= "media/platinum.png";
$alt = "image_LoL";


$enfin = img($src, $alt);
echo $enfin;


$enfin2 = img($src2, $alt);
echo $enfin2;

$enfin3 = img($src3, $alt);
echo $enfin3;

$enfin4 = img($src4, $alt);
echo $enfin4;



function img($un, $deux){
$result = "<img src=". $un ."  alt=". $deux .">";	
return $result;
	

 };




?>


<!-- 

l'utilisation de While est risqué car il faut faire attention que la fonction s'arrete, sinon DANGER !

foreach plus adapté

-->
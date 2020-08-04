<?php
header ("Content-type: image/jpeg");

$image = imagecreate(200,50);
$imagefond = imagecreatefromjpeg("img/test.jpg");

$orange = imagecolorallocate($image, 255, 128, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 1, 15, 20, "Ceci est une image créée en PHP !", $blanc);

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_image = imagesx($image);
$hauteur_image = imagesy($image);
$largeur_imagefond = imagesx($imagefond);
$hauteur_imagefond = imagesy($imagefond);

// On veut placer le logo en bas à droite, on calcule les coordonnées où on doit placer le logo sur la photo
$destination_x = $largeur_imagefond - $largeur_image;
$destination_y =  $hauteur_imagefond - $hauteur_image;

// On met le logo (source) dans l'image de destination (la photo)
imagecopymerge($imagefond, $image, $destination_x, $destination_y, 0, 0, $largeur_image, $hauteur_image, 60);

imagepng($imagefond);
?>

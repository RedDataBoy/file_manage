<?php
require_once 'inc.config.php';


// Lister les images dans un tableau $pictures (php.net/glob)

$pictures = glob('img/*.jpg');
debug($pictures);

foreach($pictures as $picture_path){
	$picture_filename = basename($picture_path);

	$query = $db->query('SELECT * FROM products WHERE picture LIKE :picture');
	$query->bindValue(':picture', $picture_filename, PDO::PARAM_STR);
	$query->execute();
	$product = $query->fetch();

	$new_name = trim($product['name']);
	$new
}



// Pour chaque image du tableau $pictures
// Faire une requete qui va chercher un produit dont la colonne picture
// Contient le nom de l'image

$query = $db->query('SELECT * FROM products WHERE picture LIKE :picture');
$random_movies = $query->fetchAll();

 $db_options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // On force l'encodage en utf8
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

?>
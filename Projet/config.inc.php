<?php
$HOME_PAGE = 'index.php';
$ERROR_404 = 'error_404';

$_PAGES = array(
	''=>'accueil',
	'accueil'=>'accueil',
	'connect'=>'connexion',
	'profil'=>'profil',
	'detail_recette'=>'recette_detail',
	'liste_recette'=>'recette_liste',
	'error_404' => $ERROR_404
	);

$cbdd = [
		"dsn" => "mysql:host=localhost;dbname=chat;charset=utf8",
		"user" => "root",
		"pwd" => ""
	];
?>
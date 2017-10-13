<?php 
$hot = 'localhost'; //le chemain vers le serveur.
$bdd = 'entreprise';//le nom de la basse de donnee.
$utilisateur = 'root';//le nom d'utilisateur pour se connecter.
$passe=''; //mot de passe de l'utilisateur.

$pdo = new PDO('mysql:host='.$hot.';dbname='.$bdd,$utilisateur,$passe );
$pdo -> exec("SET NAMES utf8");

 ?>
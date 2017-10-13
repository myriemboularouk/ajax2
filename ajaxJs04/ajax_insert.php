
<?php
require_once("init.inc.php");
// réaliser une requete d'insert permettant d'insérer un prénom dans la BDD via le formulaire HTML


    $result = $pdo -> exec("INSERT INTO  employes (prenom) VALUES ('$_POST[personne]')");
    


 ?>
<!DOCTYPE html>
<html>
<head>
      

      <script src="ajaxJs.js"></script>
	<title></title>
</head>
<body>
      <!--- Réaliser une liste déroulante permettant de sélectionner un employe de l'entreprise -->
        <form method="post" action="#">
         <?php
                 require_once("init.inc.php");
                     $result = $pdo->query("SELECT * FROM employes");
                  echo '<select name="personne" id="personne"';
                 while($employes = $result->fetch(PDO::FETCH_ASSOC)){
         	      echo "<option>$employes[prenom]</option>";
                 } 
                  echo '</select>';

          ?>
             <input type="submit" value="ok" id="submit">
      	    
        </form>
        <div id="resultat"></div>

</body>
</html>
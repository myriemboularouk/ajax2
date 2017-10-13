
<?php

require_once("init.inc.php");

    $tab = array();
    $tab['monresultat'] = '';


    $resultat = $pdo -> query("SELECT * FROM employes");

    $tab['monresultat'] .= '<table border="10">';

    $tab['monresultat'] .= '<tr>';

         for($i = 0; $i < $resultat->columnCount(); $i++ ){// compter le nombre de collones.
             $colonne = $resultat->getColumnMeta($i);// permet d'afficher tableau associatif (id f h....)
             $tab['monresultat'] .= '<th>' . $colonne['name'] . '</th>';
         }


    $tab['monresultat'] .= '</tr>';

         while($enregistrement = $resultat -> fetch(PDO::FETCH_ASSOC)){ // tant qu'il ya un employe dans la BDD il va les afficher
                 
                 	$tab['monresultat'] .= '<tr>';
                 	foreach($enregistrement as $valeur){// le nom ....
                     $tab['monresultat'] .= '<td>' . $valeur . '</td>';

            }

    $tab['monresultat'] .= '</tr><br>';
}
     //echo $tab['monresultat'];

     //$f = open('test.txt','a');
     //fwrite($f, json_encode($tab));

  echo json_encode($tab);
     // json_encode permet de transformer le tableau ARRAY au bon format (JSON)
     // Ce format (JSON) assure la possibilité de transporter les données sans (JSON) 


?>
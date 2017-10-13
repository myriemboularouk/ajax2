
document.addEventListener("DOMContentLoaded", function(event){
  document.getElementById("submit").addEventListener('click',function(event){
    event.preventDefault();// anule le comportement par défaut du submit qui est censé recharger la page
    ajax();
  });
  function ajax(){
    r = new XMLHttpRequest();// permet d'envoyer une requete ajax dans l'url
    var p = document.getElementById("personne");// je cible ce que je veut recuper en l'occurence  le champs de formulaire la personne
    var personne = p.value;// il faut recuperer la valeur de l'input
    console.info(personne);// permet d'afficher le nom de la personne dans la console

    var parameters = "personne="+personne; // prepare les paramétres à envoyer a a requete SQL.
    // console.info(parametre)

    
    r.open("POST", "ajax_insert.php", true); // je prépare le fichier PHP.
    
    r.setRequestHeader("content-type", "application/x-www-form-urlencoded");// prépare la requéte anat de l'executer.
    
    r.send(parameters); // on donne le feux vert , la requete peut etre envoyé et executé
    
    document.getElementById("resultat").innerHTML = "<span style='background:red'>employé "+p.value+" ajouté</span>";


  }
});

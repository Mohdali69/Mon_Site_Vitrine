<?php
/*
 * DS PHP
 * Controller page accueil
 *
 * Copyright 2017, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

if(isset($erreur)){
  choixAlert($erreur);
}
require_once(PATH_ENTITY.'Photo.php');
require_once(PATH_ENTITY.'PhotoDAO.php');
//Creation d'un compteur pour l'incrementation
$count = 0;
//Objet Classe Metier DAO
$UDAO = new PhotoDAO();
//$categorie Tableau 2D avec toutes les Categorie
$categorie = $UDAO->getCat();
//$table Tableau 2D avec toutes les Photos (Classe Metier Photo)
$table = $UDAO->getUser();
if(isset($choix) && $choix!='Toutes'){//Si il y a un choix de Categorie alors on effectue ceci ²sinon Affichage de Toutes les Photos²
foreach($table as $t){//Affichage des Photos en fct de la Categorie
  if($t->getCat() == $choix){
    $tab[$count] = $t;
    $count = $count +1;

  }
}
foreach($categorie as $cate){//Affichage du Titre en fct du choix et de la categorie
  if ($cate[0] == $choix){
    $title = $cate[1];
  }
}
}
else{//²
  foreach($table as $t){
    $tab[$count]= $t;
    $count = $count+1;
  }
  $title = 'Toutes les photos';
}

//appel de la vue
require_once(PATH_VIEWS.$page.'.php');
?>

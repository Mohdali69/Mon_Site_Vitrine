<?php


if(isset($erreur)){
  choixAlert($erreur);
}
//Recuperer la classe Metier et MetierDAO
require_once(PATH_ENTITY.'Photo.php');
require_once(PATH_ENTITY.'PhotoDAO.php');
//Initialisation de test en cas d'erreur
$test =0;
//Creation d'un Objet PhotoDAO
$UDAO = new PhotoDAO();
//Tableau 2D de toutes les Photos de notre DB
$tab = $UDAO->getUser();
if(isset($_GET['id'])){
  foreach ($tab as $row ) {
    if($row->getId() == $_GET['id']){
      $test= 1;
    }
  }
}
if($test == 1){ // Id existe donc nous pouvons recuperer notre Photo
foreach($tab as $t){//Pour chaques photos (lignes) recuperer la photo avec le meme id et la stocker dans un tableau 1D $picture
  if($t->getId() == $_GET['id']){
    $picture = $t;
  }
}
$categorie = $UDAO->getCat();//Creation d'un Objet PhotoDAO et appel getCat()
foreach($categorie as $c){//Pour chaque Categorie (lignes) comparer si elle est identique a l'id du tableau 1D $picture fait precedement et la stocker dans $cat
  if ($c[0] == $picture->getCat()){
    $cat = $c;
  }
}
//Appel la View photo.php
require_once(PATH_VIEWS.'photo.php');
}
else{
  $page="404";
$alert = choixAlert("Identifiant_Inconnu");

  require_once(PATH_VIEWS.$page.'.php');
}

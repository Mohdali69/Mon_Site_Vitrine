

<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE ?></h1>

<?php

echo '<div class="alert alert-success">
    <strong>'.$count.'</strong>'.NB_PHOTO.'
  </div> ';/*affichage du nombre de photos*/

echo '<style type="text/css"> h4{display : inline-block;} form{display :inline-block; margin-right : 50%;}</style> <h4>'.CHOIX_CATEGORIE.'   </h4>'.'<form methode="GET" action="index.php?page=test">
<select name="choixCat" id="choixCat" class="dropdown">
<option value="Toutes">'.ALL_PICS.'</option>
';/*affichage du formulaire*/
  foreach($categorie as $catB){
    echo '<option value="'.$catB[0].'"> '.$catB[1].'</option>'; /*ajout de chaque catégorie au dropdown apres avoir recuperer dans BD*/
  }

echo '</select>
<input type="submit" value=VALIDER>
</form>
<h3>'.$title.'</h3>  ';
//Affichage de chaques Photos en fct de la categorie ou non (controllers qui le gère)
   foreach($tab as $dat){

     echo  '<a href="index.php?page=photo&id='.$dat->getId().'"> <img class=img-thumbnail src=./assets/images/'.$dat->getName().' alt='.$dat->getDesc().'/> </a>';/*affichage des photos présentes dans la table $tab*/
   }

 ?>
<!--  Fin de la page -->

<!--  Pied de page -->


<?php

//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE_PHOTO ?></h1>

<?php
echo ' <div class = "col-md-6 col-sm-6 col-xs-12">
      <img src=./assets/images/'.$picture->getName().' alt='.$picture->getDesc().'/>
</div>
<div class = "col-md-6 col-sm-6 col-xs-12">
<table class="table table-bordered">
<tr>
  <th>Description</th><td>'.$picture->getDesc().'</td>
</tr>
<tr>
  <th>Nom du fichier</th><td>'.$picture->getName().'</td>
</tr>
<tr>
  <th>Catégorie</th><td><a href="index.php?choixCat='.$cat[0].'">'.$cat[1].'</td></a>
</tr>
</table>
</div>
';
require_once(PATH_VIEWS.'footer.php');
?>

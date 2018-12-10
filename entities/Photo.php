<?php
class Photo
{
private $identifiant;
private $name;
private $desc; //description de la photo
private $cat; //categorie de la photo
//Constructeur de la Class Photo
function __construct($id, $nom, $desc, $cat){
  $this->identifiant = $id;
  $this->name = $nom;
  $this->desc = $desc;
  $this->cat = $cat;
}

public function getId(){
  return $this->identifiant;
}

public function getName(){
  return $this->name;
}

public function getDesc(){
  return $this->desc;
}

public function getCat(){
  return $this->cat;
}

}

 ?>

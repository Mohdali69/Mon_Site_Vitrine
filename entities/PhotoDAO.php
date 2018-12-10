<?PHP
require_once(PATH_MODELS.'DAO.php');
class PhotoDAO extends DAO{
  public function getUser(){
    $requete = 'Select * from Photo';
    $donneeUser = $this->queryAll($requete);
    $i = 0;//compteur pour remplir le tableau d'objet
    foreach($donneeUser as $data){//pour chaque ligne du tab a 2D

      $PhotoTab[$i]= new Photo($data[0], $data[1], $data[2], $data[3]);//on créé un objet dans ce tableau
      $i++;
    }
    return ($PhotoTab);
  }
  public function getCat(){
    $requete = 'Select * from Categorie';
    $donneeUser = $this->queryAll($requete);
    return($donneeUser);
  }
}


?>

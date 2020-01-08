<?php
class Supplement
{
    //propriété

    private $_nom;
    private $_id_supplement;
    private $_prix;

    //méthodes

    public function setNom($NouveauNom) //Permet d'entrer un nom
    {
        $this->_nom = $NouveauNom;
    }
    
    public function setmabase($valeurid)
    {
        
        $this->_id = $valeurid;
        $mabase = new PDO('mysql:host=192.168.65.226; dbname=Tp_pizza; charset=utf8','Clems','Clems');
        $donneebrute = $mabase -> query("SELECT * FROM 'pade_sene_supplement' WHERE id_supplement =".$valeurid);
        $tabdonnee = $donneebrute -> fetch();
        $this->_nom = $tabdonnee['nom'];

    }
    public function Afficher()  //Permet d'afficher 
    {    
        echo "<p> supplement: ";
        echo " - ".$this->_nom." <p> ";
    }
}
?>

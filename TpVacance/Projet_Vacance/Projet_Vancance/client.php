<?php 
class client{
    //propriétés
    private $_nom;
    private $_nomP;
    private $_id;
    
    //méthodes

    public function setnom($nouveaunom)
    {
        $this->_nom = $nouveaunom;
    }

    public function setmaBase($valeurid)
    {
        $this->_id = $valeurid;
        $maBase =  new PDO('mysql:host=192.168.65.226; dbname=Tp_pizza; charset=utf8','Clems','Clems');
        $DonneesBrute = $maBase->query("SELECT * FROM `pade_sene_pizza` WHERE id_pizza =".$valeurid);
        $TabDonnee = $DonneesBrute ->fetch();
        $this->_nomP = $TabDonnee['nom'];
    }
    
    public function afficher()
    {
        echo "<p> Supplement :";
        echo " - ".$this->_nomP;
        
    }
}
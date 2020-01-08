<?php
class Ingredient{
    //propriété
    private $_nomI;
    private $_id;
    //méthodes

    public function setmaBase($valeurid)
    {
        $this->_id = $valeurid;
        $maBase =  new PDO('mysql:host=192.168.65.226; dbname=Tp_pizza; charset=utf8','Clems','Clems');
        $DonneesBrute = $maBase->query("SELECT nom FROM `pade_sene_ingredient` WHERE id_ingredient >".$valeurid);
        $TabDonnee = $DonneesBrute ->fetch();
        $this->_nomI = $TabDonnee['nom'];
    }

    public function AfficherI(){
        
        echo "<p> Ingrédient: ";
        echo " - ".$this->_nomI;
        echo "<p> - ".$this->_nomI;
     }
}
?>
<?php
class Pizza{
    //propriété
    private $_nom;
    private $_id_pizza;
    private $_nomPizzaCommander;
    //méthodes
    public function setNom($NouveauNom){
        $this->_nom = $NouveauNom;
    }

    public function Verif(){

        $maBase =  new PDO('mysql:host=192.168.65.226; dbname=Tp_pizza; charset=utf8','Clems','Clems');
        if ($maBase->query("SELECT nom FROM `pade_sene_pizza` WHERE id_pizza =".'id_Pizza'))
        {
            $DonneesBrute = $maBase->query("SELECT nom FROM `pade_sene_pizza` WHERE id_pizza =".'id_Pizza');
            $TabDonnee = $DonneesBrute ->fetch();
            $this->_nomPizzaCommander = $TabDonnee['nom'];
            echo " - ".$this->_nomPizzaCommander;
        }

        //if($lenom == $this->_nom)
        //{
       //     if($lemdp == $this->_mdp)
        //    {
        //        return true;
        //    }
       // }
       // return false;
     }

     public function Affiche()
     {
        echo "La pizza choisi: ".$this->_nomPizzaCommander;
     }
}
?>
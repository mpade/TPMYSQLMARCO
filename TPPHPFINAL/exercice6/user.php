<?php
class user{
    //propriété
    private $_nom;
    private $_mdp;

    //méthodes

    public function setNom($NouveauNom){
        $this->_nom = $NouveauNom;
    }

    public function setmdp($Nouveaumdp){
        $this->_mdp = $Nouveaumdp;
    }

    public function Verifmdp($lenom,$lemdp){
        if($lenom == $this->_nom)
        {
            if($lemdp == $this->_mdp)
            {
                return true;
            }
        }
        return false;
    }

}
?>
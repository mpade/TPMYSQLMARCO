<?php

class user
{
    private $_nom;
    private $_motdepass;

    public function affichenom()
    {
        echo $this->_nom;
    }

    public function setnom($nouveaunom)
    {
        $this->_nom = $nouveaunom;
    }

    public function setmdp($nouveaumdp)
    {
        $this->_motdepass = $nouveaumdp;
    }

    public function veriflog($mdp,$nomform)
    {
       
        if($mdp== $this->_motdepass && $nomform== $this->_nom)
        {
            echo "Bienvenue";
        }
        else
        {
            echo "mot de passe ou nom erroné";
        } 
    }





}
















?>
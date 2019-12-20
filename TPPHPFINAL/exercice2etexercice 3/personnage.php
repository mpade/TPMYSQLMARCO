<?php

class personnage
{
    private $_pseudo;
    private $_vie;

    public function __construct($valeurvie,$valeurnom){

        $this->_vie = $valeurvie;
        $this->_pseudo = $valeurnom;
    }

    public function afficher(){

        echo "<p>Je suis ".$this->_pseudo." est j'ai ".$this->_vie." point de vie ";
    }
}
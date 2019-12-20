<?php
class Personnage{

    //propriété
    private $_name;
    private $_vie;
    private $_puissance;
    private $_isLife;
    private $_id;

    //méthodes
    public function __construct($valeurid){

        $this->_id =  $valeurid;
        $maBase=new PDO('mysql:host=192.168.65.60; dbname=BasePade; charset=utf8','root2','root2'); 
        $LesDonneesBrutesDeLaBdd = $maBase->query("select * from Personnage where `Id_Personnage` =".$valeurid);
        $TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch();
        $this->_name = $TableauDeDonnée['Prenom'];
        $this->_vie = $TableauDeDonnée['Vie'];
        
        
 
     }


    public function Afficher(){
       echo "<p> Mon nom est ".$this->_name;
       echo " je possede ".$this->_vie." point de vie ";

    }
}
?>
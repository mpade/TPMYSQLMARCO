<?php
class Perso{

    //propriété
    private $_name;
    private $_vie;
    private $_puissance;
    private $_isLife;

    //méthodes
    public function __construct($valeurVie,$valeurPuissance,$valeurname){

        $this->_vie = $valeurVie;
        $this->_puissance = $valeurPuissance;
        $this->_name = $valeurname;
        $this->_isLife = true;
 
     }


    public function Afficher(){
       echo "<p> Mon nom est ".$this->_name;
       echo " je possede ".$this->_vie." point de vie et ".$this->_puissance." de puissance";

    }
    
    public function Attaquer($perso){

        
        echo "<p>".$this->_name." a attaquer ".$perso->getNom().', ';
        
        $perso->defense($this->_puissance);
     }

    public function defense($degat){
        
        $this->_vie -= $degat;
       
        if($this->_vie <= 0)
        { 
            $this->_isLife = false;
            echo "".$this->_name." a perdu ".$degat." ce coup etait fatal </p> ";
        }
        else{
            echo "".$this->_name." a perdu ".$degat."</p>";
        }
       
     }
     
     public function isLife(){
        return $this->_isLife;
     }

     public function getNom()
     {
         return $this->_name;
     }

}
?>
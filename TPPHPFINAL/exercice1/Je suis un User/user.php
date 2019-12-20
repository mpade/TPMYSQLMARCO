<?php

class user
{
  private $_user;
  private $_prenom; 
  
  public function setnom($nouveaunom)
  {
      $this->_user = $nouveaunom;
  }

  public function afficheuser()
  {
      echo $this->_user;
  }
}
    

    
<?php

/**
* @author PapiHack
* @since 28/02/19
*
* Classe représentant notre usine d'instanciation (la fabrique)
*
*/
class Factory
{
  private $_class;

  public function __construct($class)
  {
    $this->setClass($class);
  }

  public function getFigure()
  {
    return new $this->_class;
  }

  private function setClass($class)
  {
    if(class_exists($class))
    {
      $this->_class = $class;
    }
    else
    {
      echo "Cette classe n'existe pas !";
      exit();
    }
  }
}

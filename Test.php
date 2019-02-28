<?php

/**
* @author PapiHack
* @since 28/02/19
*
* Test de notre usine.
*/

/**
*
* Fonction chargée de l'inclusion de nos classes.
*
*/
function chargerClass($class)
{
  include_once $class.'.php';
}

/**
*
* Mise en place de l'autoloader.
* (Ajout de notre fonction dans la pile d'autoload)
*/
spl_autoload_register('chargerClass');

$usine = new Factory('Cercle');
$figure = $usine->getFigure();
$figure->jeMeDecris();

$maNouvelleFabrique = new Factory('Triangle');
$maFigure = $maNouvelleFabrique->getFigure();
$maFigure->jeMeDecris();

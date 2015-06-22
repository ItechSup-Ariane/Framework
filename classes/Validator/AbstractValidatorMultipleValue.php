<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Itechsup\FormFwk\Validator;

/**
 * Classe abstraite ValidatorMultipleValue validateur pour collection de widgets
 */
abstract class ValidatorMultipleValue
{
    protected $widgets;
    
    /*
    * Fonction Constructeur de la classe ValidatorMultipleValue
    * @param String Message contient le message d'erreur à afficher
    * @param array widgets collection de widgets à valider
    */
    public function __construct($message, $widgets)
    {
        parent::__construct($message);
        $this->widgets = $widgets;
    }
}

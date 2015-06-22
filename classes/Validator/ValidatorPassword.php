<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Itechsup\FormFwk\Validator;

use Itechsup\FormFwk\Validator\ValidatorMultipleValue;
use Itechsup\FormFwk\Exception\ValidatorException;
/**
 * Class abstract ValidatorPassword verifie l'égalité de deux password
 *
 * @author nathan
 */
abstract class ValidatorPassword extends ValidatorMultipleValue
{
    /**
    * Function validate permettant la comparaison de deux mots de passe
    * @param array widgets collection de widgets a comparer
    */
    public function validate($widgets)
    {
        $pwd1 = "";
        $pwd2 = "";
        //Doit-on parcourir le tableau ou simplement séléctionner l'index 1 & 2?
        Foreach ($widgets as $widget) {
            if ($pwd1 != "") {
                $pwd1 = $widget->getData();
            } else {
                $pwd2 = $widget->getData();
            }
        }
        if ($pwd1 != $pwd2) {
            throw new ValidatorException($this->getMessage());
        }
    }
}

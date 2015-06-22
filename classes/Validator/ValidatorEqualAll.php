<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Itechsup\FormFwk\Validator;

use Itechsup\FormFwk\Validator\AbstractValidator;
use Itechsup\FormFwk\Exception\ValidatorException;
/**
 * Class abstract ValidatorPassword verifie l'égalité de deux password
 *
 * @author nathan
 */
abstract class ValidatorEqualAll extends AbstractValidator
{
    /**
    * Function validate permettant la comparaison de deux mots de passe
    * @param array widgets collection de widgets a comparer
    */
    public function validate($values)
    {
        $ref = array_shift($values);
        foreach ($values as $value){
            if ($value != $ref) {
                throw new ValidatorException($this->getMessage());
            }
        }
    }
}

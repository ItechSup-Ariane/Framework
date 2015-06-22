<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Validator;

use Itechsup\FormFwk\Exception\ValidatorException;

/**
 * Description of ValidatorNumericInteger
 *
 * @author Thomas
 */
class ValidatorNumericInteger extends AbstractValidator implements InterfaceValidator
{
    
    public function validate($value)
    {
        if (!is_numeric($value) || !is_int($value)) {
            throw new ValidatorException($this->getMessage());
        }
    }

}

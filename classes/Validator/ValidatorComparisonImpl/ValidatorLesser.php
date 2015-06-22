<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Validator\ValidatorComparisonImpl;

use Itechsup\FormFwk\Validator\InterfaceValidator;
use Itechsup\FormFwk\Validator\ValidatorComparison;
use Itechsup\FormFwk\Exception\ValidatorException;

/**
 * Description of ValidatorComparison
 *
 * @author Thomas
 */
class ValidatorLesser extends ValidatorComparison implements InterfaceValidator
{

    public function validate($value)
    {

        if ($value >= $this->referenceValue) {
            throw new ValidatorException($this->getMessage());
        }
    }

}

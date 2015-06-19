<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Validator;

use Itechsup\FormFwk\Exception\ValidatorException;

/**
 * Description of ValidatorSpecialChars
 *
 * @author Thomas
 */
class ValidatorSpecialChars extends AbstractValidator implements InterfaceValidator
{

    public function validate($value)
    {
        $pattern = "#[a-zA-Z0-9_-]#";

        $result = preg_match($pattern, $value);

        if ($result !== 1) {
            throw new ValidatorException($this->getMessage());
        }
    }

}

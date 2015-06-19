<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Validator;

/**
 * Description of ValidatorSpecialChars
 *
 * @author Thomas
 */
class ValidatorSpecialChars {
    
    public function validate($value)
    {
        $pattern = "";

        $result = preg_match($pattern, $value);

        if ($result == 1) {
            
        }
    }
    
}

<?php

namespace Itechsup\FormFwk\Validator;

use Itechsup\FormFwk\Exception\ValidatorException;

/**
 * Description of YouShouldNotPass
 *
 * @author Maxime
 */
class ValidatorYouShouldNotPass
{
    public function validate(){
        throw new ValidatorException();
    }
    
    public function getMessage(){
        return 'You Should Not Pass !';
    }
}

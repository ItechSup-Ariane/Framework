<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Validator;

/**
 * Description of ValidatorComparison
 *
 * @author Thomas
 */
class ValidatorComparison extends AbstractValidator
{

    protected $referenceValue;

<<<<<<< HEAD
    public function __construct($message, $referenceValue)
=======
    public function __construct($message, $referenceValue = null)
>>>>>>> origin/PFU
    {
        parent::__construct($message);
        $this->referenceValue = $referenceValue;
    }

<<<<<<< HEAD
=======
    public function setReferenceValue($referenceValue)
    {
        $this->referenceValue = $referenceValue;
    }

>>>>>>> origin/PFU
}

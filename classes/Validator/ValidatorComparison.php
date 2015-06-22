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

    public function __construct($message, $referenceValue = null)
    {
        parent::__construct($message);
        $this->referenceValue = $referenceValue;
    }

    public function setReferenceValue($referenceValue)
    {
        $this->referenceValue = $referenceValue;
    }

}

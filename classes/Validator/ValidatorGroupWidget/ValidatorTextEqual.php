<?php

namespace Itechsup\FormFwk\Validator\ValidatorGroupWidget;

use Itechsup\FormFwk\Validator\InterfaceValidator;
use \Itechsup\FormFwk\Validator\AbstractValidator;
use Itechsup\FormFwk\Exception\ValidatorException;

/**
 * Description of ValidatorEqual
 *
 * @author Thomas
 */
class ValidatorTextEqual extends AbstractValidator implements InterfaceValidator
{
    private $widgets = [];
    function __construct($message, array $groupWidget)
    {
        parent::__construct($message);
        $this->widgets = $groupWidget;
    }

    public function validate($value)
    {
        $value = null;
        foreach($this->widgets as $w)
        {
            if($value==null) {
                $value = $w->getData();       
            } else {
                if ($value != $w->getData()) {
                    throw new ValidatorException($this->getMessage());
                }
            }   
        
        }
    }

}
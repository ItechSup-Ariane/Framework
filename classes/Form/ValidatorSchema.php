<?php

namespace Itechsup\FormFwk\Form;

/**
 * Description of Schema
 *
 * @author Maxime
 */
abstract class ValidatorSchema
{
    /**
     * Widget,Validator, ErrorMessage holder
     */
    protected $widgets = [];
    
    public function addWidget($widget,$validators = null){
        $this->widgets[$widget->getName()] = [$widget, $validators] ;
    }
}

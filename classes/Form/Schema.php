<?php

namespace Itechsup\FormFwk\Form;

/**
 * Description of Schema
 *
 * @author Maxime, Antoine, Thomas DF, Thomas D
 */
abstract class Schema
{
    /**
     * Widget,Validator, ErrorMessage holder
     */
    protected $widgets = [];
    
    public function addWidget($widget,$validators){
        $this->widgets[$widget->getName()] = [$widget, $validators] ;
    }
}

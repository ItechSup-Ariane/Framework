<?php

namespace Itechsup\FormFwk\Form;

use Itechsup\FormFwk\Exception\ValidatorException;

/**
 * Description of Schema
 *
 * @author Maxime
 */
class ValidatorSchema
{

    /**
     * Widget holder
     */
    private $widgets = [];
    private $validators = [];
    private $hasError = false;
    private $data = null;

    public function addWidget($widget, array $validators = [])
    {
        $this->widgets[$widget->getName()] = $widget;
        $this->validators[$widget->getName()] = $validators;
    }

    public function getWidgets()
    {
        return $this->widgets;
    }

    public function bind($data = [])
    {
        $this->data = $data;
        foreach ($this->getWidgets() as $name => $widget) {
            $widget->bind($this->data[$name]);
        }
        $this->validate();
        //Appel de la fonction de Validation des collections de widgets
        $this->validateMultiple();
    }

    private function validate()
    {
        foreach ($this->validators as $widgetName => $validators) {
            $errorMsg = [];
            foreach ($validators as $validator) {
                try {
                    $validator->validate($this->data[$widgetName]);
                } catch (ValidatorException $e) {
                    $errorMsg[] = $validator->getMessage();
                }
            }
            $this->widgets[$widgetName]->setErrors($errorMsg);
            $this->hasError = $this->hasError || !empty($errorMsg);
        }
    }
    
    // Doit on passer la collection en argument ?
    private function validateMultiple()
    {
        
    }
    public function isValid()
    {
        return $this->data !== null && $this->hasError == true;
    }

    public function linkWidget($widgets, $widget)
    {
       $widgets[$widget->getName()] = $widget;
    }    
}

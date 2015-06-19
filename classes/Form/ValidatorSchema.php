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
    private $errors = [];
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
    }

    private function validate()
    {
        foreach ($this->validators as $widgetName => $validators) {
            $errorMsg = '';
            foreach ($validators as $validator) {
                try {
                    $validator->validate($this->data[$widgetName]);
                } catch (ValidatorException $e) {
                    $errorMsg .= $validator->getMessage();
                    
                }
            }
            $this->errors[$widgetName][] = $errorMsg;
        }
    }

    public function isValid()
    {
        return $this->data !== null && empty($this->errors);
    }

}

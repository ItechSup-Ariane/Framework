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
    private $groupValidators = [];
    private $bindGroupValidWidget = [];
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
        foreach ($this->groupValidators as $nameGroupValidator => $groupValidator) {
            $dataFirstWidget = $this->data[current($this->bindGroupValidWidget[$nameGroupValidator])];
            foreach ($groupValidator as $validator) {
                $validator->setReferenceValue($dataFirstWidget);
                foreach ($this->bindGroupValidWidget[$nameGroupValidator] as $widgetName) {
                    $errorMsg = [];
                    try {
                        $validator->validate($this->data[$widgetName]);
                    } catch (ValidatorException $e) {
                        $errorMsg[] = $validator->getMessage();
                    }
                    $this->widgets[$widgetName]->setErrors($errorMsg);
                    $this->hasError = $this->hasError || !empty($errorMsg);
                }
            }
        }
    }

    private function validateWidget($widgetName, array $validators)
    {
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

    public function isValid()
    {
        return $this->data !== null && $this->hasError == true;
    }

    public function addGroupValidator($nameGroupValidator, array $groupValidator)
    {
        $this->groupValidators[$nameGroupValidator] = $groupValidator;
    }

    public function bindGroupValidator($nameGroupValidator, array $nameWidget)
    {
        $this->bindGroupValidWidget[$nameGroupValidator] = $nameWidget;
    }

}

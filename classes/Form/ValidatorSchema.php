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
    private $widgetMultiple = []; //tableau affectant une collection de widget pour un group de widget
    private $validatorsMultiple = []; //tableau affectant un validateur pour un group de widget
    private $hasError = false;
    private $errors = [];
    private $data = null;
    
    public function addWidget($widget, array $validators = [])
    {
        $this->widgets[$widget->getName()] = $widget;
        $this->validators[$widget->getName()] = $validators;
    }
    
    public function addGroupWidget(array $widgets = [], $validator)
    {
        $newKey = $this->createKeys();
        $this->widgetMultiple[$newKey] = $widgets;
        $this->validatorsMultiple[$newKey] = $validator;
    }
    
    private function createKeys()
    {
        $keys = array_keys($this->widgetMultiple);
        return count($keys);
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
        $this->validateGroup();
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
    
    private function validateGroup()
    {
        foreach ($this->validatorsMultiple as $key => $validator) {
            $errorMsg = [];
            try {
                $validator->validate($this->widgetMultiple[$key]);
            } catch (ValidatorException $e) {
                $errorMsg[] = $validator->getMessage();
            }
            foreach ($this->widgetMultiple[$key] as $widget) {
                $widget->setErrors($errorMsg);
                $this->hasError = $this->hasError || !empty($errorMsg);
            }
        }
    }

    public function isValid()
    {
        return $this->data !== null && $this->hasError == true;
    }
}

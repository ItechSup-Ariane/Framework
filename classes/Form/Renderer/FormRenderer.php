<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 10:06
 */

namespace Itechsup\FormFwk\Form\Renderer;
use Itechsup\FormFwk\Form\Form;

abstract class FormRenderer {

    private $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    abstract protected function renderFormWrapperStart();
    abstract protected function renderFormWrapperEnd();
    abstract protected function renderWidgetWrapperStart();
    abstract protected function renderWidgetWrapperEnd();

    public function renderForm()
    {
        $output = $this->renderFormWrapperStart();
        $output .= $this->form->renderFormStart();
        foreach ($this->form->getSchema()->getWidgets() as $widget) {
            $output .= $this->renderWidgetWrapperStart();
            $output .= $widget->render();
            $output .= $this->renderWidgetWrapperEnd();
        }
        $output .= $this->form->renderFormEnd();
        $output .= $this->renderFormWrapperEnd();
        return $output;
    }
}

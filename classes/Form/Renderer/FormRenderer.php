<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 10:06
 */

namespace Itechsup\FormFwk\Form\Renderer;
use Itechsup\FormFwk\Form\Form;

/**
 * Class FormRenderer
 *
 * @package Itechsup\FormFwk\Form\Renderer
 */
abstract class FormRenderer {

    /**
     * @var \Itechsup\FormFwk\Form\Form
     * The form to render
     */
    private $form;

    /**
     * Constructor of FormRenderer
     *
     * @param \Itechsup\FormFwk\Form\Form $form
     *  The form to render
     */
    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    /**
     * Abstract method to start the HTML of the form's wrapper.
     *
     * @return string
     *  The HTML starting the form wrapper
     */
    abstract protected function renderFormWrapperStart();

    /**
     * Abstract method to end the HTML of the form's wrapper.
     *
     * @return string
     *  The HTML ending the form wrapper
     */
    abstract protected function renderFormWrapperEnd();

    /**
     * Abstract method to start the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML starting the widget wrapper
     */
    abstract protected function renderWidgetWrapperStart();

    /**
     * Abstract method to end the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML ending the widget wrapper
     */
    abstract protected function renderWidgetWrapperEnd();

    /**
     * Render the form, wrapped depending on the implementation.
     *
     * @return string
     *  The HTML of the form (wrapped as we wanted).
     */
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

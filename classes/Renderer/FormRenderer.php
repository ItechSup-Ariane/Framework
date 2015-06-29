<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 10:06
 */

namespace Itechsup\FormFwk\Renderer;

/**
 * Class FormRenderer
 *
 * Abstract class providing common methods for Form Renderers implementations
 *
 * @package Itechsup\FormFwk\Form\Renderer
 */
abstract class FormRenderer
{

    /**
     * Abstract method to start the HTML of the start of the form's wrapper.
     *
     * @return string
     *  The HTML starting the form wrapper
     */
    abstract protected function renderFormStartWrapperStart();

    /**
     * Abstract method to end the HTML of the start of the form's wrapper.
     *
     * @return string
     *  The HTML ending the form wrapper
     */
    abstract protected function renderFormStartWrapperEnd();

    /**
     * Abstract method to start the HTML of the end of the form's wrapper.
     *
     * @return string
     *  The HTML starting the form wrapper
     */
    abstract protected function renderFormEndWrapperStart();

    /**
     * Abstract method to end the HTML of the end of the form's wrapper.
     *
     * @return string
     *  The HTML ending the form wrapper
     */
    abstract protected function renderFormEndWrapperEnd();

    /**
     * Abstract method to start the HTML of a form widget's label wrapper.
     *
     * @return string
     *  The HTML starting the widget wrapper
     */
    abstract protected function renderWidgetLabelWrapperStart();

    /**
     * Abstract method to end the HTML of a form widget's label wrapper.
     *
     * @return string
     *  The HTML ending the widget wrapper
     */
    abstract protected function renderWidgeLabelWrapperEnd();


    /**
     * Abstract method to start the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML starting the widget wrapper
     */
    abstract protected function renderWidgetWidgetWrapperStart();

    /**
     * Abstract method to end the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML ending the widget wrapper
     */
    abstract protected function renderWidgetWidgetWrapperEnd();

    /**
     * Abstract method to start the HTML of a form widget's errors wrapper.
     *
     * @return string
     *  The HTML starting the widget's error wrapper
     */
    abstract protected function renderWidgetErrorsWrapperStart();

    /**
     * Abstract method to end the HTML of a form widget's errors wrapper.
     *
     * @return string
     *  The HTML ending the widget's error wrapper
     */
    abstract protected function renderWidgetErrorsWrapperEnd();

    /**
     * Render the HTML wrapping the form start.
     *
     * @param $formStart string
     *  The raw HTML of the form start.
     *
     * @return string
     *  The wrapped HTML of the form start.
     */
    public function renderFormStart($formStart)
    {
        $output = $this->renderFormStartWrapperStart();
        $output .= $formStart;
        $output .= $this->renderFormStartWrapperEnd();
        return $output;
    }

    /**
     * Render the HTML wrapping the form end.
     *
     * @param $formEnd string
     *  The raw HTML of the form end.
     *
     * @return string
     *  The wrapped HTML of the form end.
     */
    public function renderFormEnd($formEnd)
    {
        $output = $this->renderFormEndWrapperStart();
        $output .= $formEnd;
        $output .= $this->renderFormEndWrapperEnd();
        return $output;
    }

    /**
     * Render the HTML wrapping the widget's label.
     *
     * @param $label string
     *  The raw HTML of the widget's label.
     *
     * @return string
     *  The wrapped HTML of the widget's label.
     */
    public function renderWidgetLabel($label)
    {
        $output = $this->renderWidgetLabelWrapperStart();
        $output .= $label;
        $output .= $this->renderWidgeLabelWrapperEnd();
        return $output;
    }

    /**
     * Render the HTML wrapping the widget's widget.
     *
     * @param $widget string
     *  The raw HTML of the widget's widget.
     *
     * @return string
     *  The wrapped HTML of the widget's widget.
     */
    public function renderWidgetWidget($widget)
    {
        $output = $this->renderWidgetWidgetWrapperStart();
        $output .= $widget;
        $output .= $this->renderWidgetWidgetWrapperEnd();
        return $output;
    }

    /**
     * Render the HTML wrapping the widget's errors.
     *
     * @param $errors string
     *  The raw HTML of the widget's errors.
     *
     * @return string
     *  The wrapped HTML of the widget's errors.
     */
    public function renderWidgetErrors($errors)
    {
        $output = $this->renderWidgetErrorsWrapperStart();
        $output .= $errors;
        $output .= $this->renderWidgetErrorsWrapperEnd();
        return $output;
    }
}

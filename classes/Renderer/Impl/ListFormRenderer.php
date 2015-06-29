<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 10:41
 */

namespace Itechsup\FormFwk\Renderer\Impl;

use Itechsup\FormFwk\Renderer\FormRenderer;

class ListFormRenderer extends FormRenderer
{
    /**
     * @inherit
     */
    protected function renderFormStartWrapperStart()
    {
        return '<ul>';
    }

    /**
     * Method to end the HTML of the start of the form's wrapper.
     *
     * @return string
     *  The HTML ending the form wrapper
     */
    protected function renderFormStartWrapperEnd()
    {
        return '';
    }

    /**
     * Method to start the HTML of the end of the form's wrapper.
     *
     * @return string
     *  The HTML starting the form wrapper
     */
    protected function renderFormEndWrapperStart()
    {
        return '';
    }

    /**
     * Method to end the HTML of the end of the form's wrapper.
     *
     * @return string
     *  The HTML ending the form wrapper
     */
    protected function renderFormEndWrapperEnd()
    {
        return '</ul>';
    }

    /**
     * Method to start the HTML of a form widget's label wrapper.
     *
     * @return string
     *  The HTML starting the widget wrapper
     */
    protected function renderWidgetLabelWrapperStart()
    {
        return '<li><ul><li>';
    }

    /**
     * Method to end the HTML of a form widget's label wrapper.
     *
     * @return string
     *  The HTML ending the widget wrapper
     */
    protected function renderWidgeLabelWrapperEnd()
    {
        return '</li>';
    }

    /**
     * Method to start the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML starting the widget wrapper
     */
    protected function renderWidgetWidgetWrapperStart()
    {
        return '<li>';
    }

    /**
     * Method to end the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML ending the widget wrapper
     */
    protected function renderWidgetWidgetWrapperEnd()
    {
        return '</li>';
    }

    /**
     * Method to start the HTML of a form widget's errors wrapper.
     *
     * @return string
     *  The HTML starting the widget's error wrapper
     */
    protected function renderWidgetErrorsWrapperStart()
    {
        return '<li>';
    }

    /**
     * Method to end the HTML of a form widget's errors wrapper.
     *
     * @return string
     *  The HTML ending the widget's error wrapper
     */
    protected function renderWidgetErrorsWrapperEnd()
    {
        return '</li></ul></li>';
    }

}
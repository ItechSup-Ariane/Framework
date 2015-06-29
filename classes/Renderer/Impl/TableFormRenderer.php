<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 10:41
 */

namespace Itechsup\FormFwk\Renderer\Impl;

use Itechsup\FormFwk\Renderer\FormRenderer;

class TableFormRenderer extends FormRenderer
{
    /**
     * Method to start the HTML of the start of the form's wrapper.
     *
     * @return string
     *  The HTML starting the form wrapper
     */
    protected function renderFormStartWrapperStart()
    {
        return '<table width="100%">';
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
        return '</table>';
    }

    /**
     * Method to start the HTML of a form widget's label wrapper.
     *
     * @return string
     *  The HTML starting the widget wrapper
     */
    protected function renderWidgetLabelWrapperStart()
    {
        return '<tr><td>';
    }

    /**
     * Method to end the HTML of a form widget's label wrapper.
     *
     * @return string
     *  The HTML ending the widget wrapper
     */
    protected function renderWidgeLabelWrapperEnd()
    {
        return '</td>';
    }

    /**
     * Method to start the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML starting the widget wrapper
     */
    protected function renderWidgetWidgetWrapperStart()
    {
        return '<td>';
    }

    /**
     * Method to end the HTML of a form's widget wrapper.
     *
     * @return string
     *  The HTML ending the widget wrapper
     */
    protected function renderWidgetWidgetWrapperEnd()
    {
        return '</td>';
    }

    /**
     * Method to start the HTML of a form widget's errors wrapper.
     *
     * @return string
     *  The HTML starting the widget's error wrapper
     */
    protected function renderWidgetErrorsWrapperStart()
    {
        return '<td>';
    }

    /**
     * Method to end the HTML of a form widget's errors wrapper.
     *
     * @return string
     *  The HTML ending the widget's error wrapper
     */
    protected function renderWidgetErrorsWrapperEnd()
    {
        return '</td></tr>';
    }

}
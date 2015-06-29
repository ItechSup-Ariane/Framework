<?php

namespace Itechsup\FormFwk\Renderer;

use Itechsup\FormFwk\Renderer\Renderer;

/**
 * Factory for render a form with a table format
 *
 * @author Maxime
 */
class TableRenderer extends Renderer
{

    /**
     * Renders start tag for a form and start tag for a table
     *
     * @return string
     */
    public function renderFormStart()
    {
        return '<form method="POST" action=""><table'.$this->renderHtmlAttributes().'>';
    }

    /**
     * Renders submit button, end tag for a form and a end tag for a table
     *
     * @return string
     */
    public function renderFormEnd()
    {
        return '</table><input type="submit" value="Soumet moi !" /></form>';
    }

    /**
     * Render of the complete widget, with label, widget and error message
     * Render for a table format
     * 
     * @param Widget $widget
     * @return string
     */
    public function renderCompleteWidget($widget)
    {
        $return = '<tr><td>'.$widget->renderLabel().'</td>';
        $return .= '<td>'.$widget->renderWidget().'</td>';
        $return .= '<td>'.$widget->renderError().'</td></tr>';
        return $return;
    }

}

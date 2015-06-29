<?php

namespace Itechsup\FormFwk\Renderer;

use Itechsup\FormFwk\Factory\Renderer;


/**
 * Factory for render a form with a table format
 *
 * @author Maxime
 */
class TableRenderer extends Renderer
{

    public function renderFormStart()
    {
        return '<form method="POST" action=""><table'.$this->renderHtmlAttributes().'>';
    }

    /**
     * Renders end tag for a form.
     *
     * @return string
     */
    public function renderFormEnd()
    {
        return '</table><input type="submit" value="Soumet moi !" /></form>';
    }

    /**
     * Render of the complete widget, with label, widget and error message
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

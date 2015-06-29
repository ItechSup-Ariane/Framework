<?php

namespace Itechsup\FormFwk\Renderer;

use Itechsup\FormFwk\Renderer\Renderer;


/**
 * Factory for render a form with a list format
 *
 * @author Maxime
 */
class ListRenderer extends Renderer
{
    /**
     * Renders start tag for a form and start tag for a ul list
     *
     * @return string
     */
    public function renderFormStart()
    {
        return '<form method="POST" action=""><ul'.$this->renderHtmlAttributes().'>';
        
    }

    /**
     * Renders end tag for a form and end tag for a ul list
     *
     * @return string
     */
    public function renderFormEnd()
    {
        return '</ul><input type="submit" value="Soumet moi !" /></form>';
    }
    
    /**
     * Render of the complete widget, with label, widget and error message
     * Render for a ul/li format
     * 
     * @param Widget $widget
     * @return string
     */
    public function renderCompleteWidget($widget)
    {
        $return = '<li>'.$widget->renderLabel();
        $return .= $widget->renderWidget();
        $return .= $widget->renderError().'</li>';
        return $return;
    }

}

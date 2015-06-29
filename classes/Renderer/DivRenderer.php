<?php

namespace Itechsup\FormFwk\Renderer;

use Itechsup\FormFwk\Renderer\Renderer;

/**
 * Factory for render a form with multiple div format
 *
 * @author Maxime
 */
class DivRenderer extends Renderer
{

    /**
     * Renders start tag for a form
     *
     * @return string
     */
    public function renderFormStart()
    {
        return '<form method="POST" action="">';
    }

    /**
     * Renders end tag for a form.
     *
     * @return string
     */
    public function renderFormEnd()
    {
        return '<input type="submit" value="Soumet moi !" /></form>';
    }

    /**
     * Render of the complete widget, with label, widget and error message
     * Render for a div format
     * 
     * @param Widget $widget
     * @return string
     */
    public function renderCompleteWidget($widget)
    {
        $return = '<div name='.$widget->getName().'>'.$widget->renderLabel();
        $return .= $widget->renderWidget();
        $return .= $widget->renderError().'</div>';
        return $return;
    }

}

<?php

namespace Itechsup\FormFwk\Factory;

use Itechsup\FormFwk\Factory\Factory;


/**
 * Factory for render a form with a list format
 *
 * @author Maxime
 */
class ListFactory extends Factory
{

    public function renderFormStart()
    {
        return '<form method="POST" action=""><ul'.$this->renderHtmlAttributes().'>';
        
    }

    /**
     * Renders end tag for a form.
     *
     * @return string
     */
    public function renderFormEnd()
    {
        return '</ul><input type="submit" value="Soumet moi !" /></form>';
    }

    public function renderCompleteWidget($widget)
    {
        $return = '<li>'.$widget->renderLabel();
        $return .= $widget->renderWidget();
        $return .= $widget->renderError().'</li>';
        return $return;
    }

}

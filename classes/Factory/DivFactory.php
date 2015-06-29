<?php

namespace Itechsup\FormFwk\Factory;

use Itechsup\FormFwk\Factory\Factory;

/**
 * Factory for render a form with multiple div format
 *
 * @author Maxime
 */
class DivFactory extends Factory
{

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

    public function renderCompleteWidget($widget)
    {
        $return = '<div name='.$widget->getName().'>'.$widget->renderLabel();
        $return .= $widget->renderWidget();
        $return .= $widget->renderError().'</div>';
        return $return;
    }

}

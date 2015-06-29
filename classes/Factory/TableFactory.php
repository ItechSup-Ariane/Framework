<?php

namespace Itechsup\FormFwk\Factory;

use Itechsup\FormFwk\Factory\Factory;


/**
 * Factory for render a form with a table format
 *
 * @author Maxime
 */
class TableFactory extends Factory
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

    public function renderCompleteWidget($widget)
    {
        $return = '<tr><td>'.$widget->renderLabel().'</td>';
        $return .= '<td>'.$widget->renderWidget().'</td>';
        $return .= '<td>'.$widget->renderError().'</td></tr>';
        return $return;
    }

}

<?php

namespace Itechsup\FormFwk\Factory;

use Itechsup\FormFwk\Factory\Factory;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TableFactory
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
    }

}

<?php

namespace Itechsup\FormFwk\Factory;

use Itechsup\FormFwk\Factory\Factory;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of renderFactory
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
    }

}

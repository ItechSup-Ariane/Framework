<?php

namespace Itechsup\FormFwk\Renderer;
use \Itechsup\FormFwk\Widget\Widget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of renderDiv
 *
 * @author silunga
 */
class renderTable {
    //put your code here
    public function preRender()
    {
        $return = "<table>";        
        return $return;
    }
    public function render($widget)
    {
        
        $return = "<tr><td>";
        $return .= $widget->renderLabel();
        $return .= "</td><td>";
        $return .= $widget->renderWidget();
        $return .= "</td><td>";
        $return .= $widget->renderError();        
        $return .= "</td></tr>";
        return $return;
    }
    public function postRender()
    {
        $return = "</table>";
        return $return;
    }
}

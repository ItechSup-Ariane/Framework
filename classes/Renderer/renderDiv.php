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
class renderDiv {
    //put your code here
    public function preRender()
    {
        $return = "<div>";
        return $return;
    }
    public function render($widget)
    {
        
        $return = "<div><div>";
        $return .= $widget->renderLabel();
        $return .= "</div><div>";
        $return .= $widget->renderWidget();
        $return .= "</div><div>";
        $return .= $widget->renderError();        
        $return .= "</div></div>";
        return $return;
    }
    public function postRender()
    {
        $return = "</div>";
        return $return;
    }
}

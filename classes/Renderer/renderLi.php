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
class renderLi {
    //put your code here
    public function preRender()
    {
        $return = "<ul>";        
        return $return; 
    }
    public function render($widget)
    {
        
        $return = "<li><ul><li>";
        $return .= $widget->renderLabel();
        $return .= "</li><li>";
        $return .= $widget->renderWidget();
        $return .= "</li><li>";
        $return .= $widget->renderError();        
        $return .= "</li></ul></li>";
        return $return;
    }
    public function postRender()
    {        
        $return = "</ul>";
        return $return; 
    }
}

<?php

namespace Itechsup\FormFwk\Renderer;
use \Itechsup\FormFwk\Widget\Widget;


/**
 * Description of renderDiv
 *
 * @author silunga
 * Format render with unsorted list
 *
 */

class renderLi 
{
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

<?php

namespace Itechsup\FormFwk\Renderer;
use \Itechsup\FormFwk\Widget\Widget;

/**
 * Description of renderDiv
 *
 * @author silunga
 * Format render with <div>'s tags
 *
 */
class renderDiv 
{
    
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

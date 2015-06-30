<?php

namespace Itechsup\FormFwk\Renderer;
use \Itechsup\FormFwk\Widget\Widget;


/**
 * Description of renderDiv
 *
 * @author silunga
 * Format render in a table 
 *
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

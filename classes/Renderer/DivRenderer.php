<?php

namespace Itechsup\FormFwk\Renderer;

class DivRenderer implements IRenderer
{
    
    public function renderContentStart()
    {       
        $output = '';
        return $output;
    }
    public function renderContentEnd()
    {
        $output = '';
        return $output;
    }
    public function renderContentWidgetStart()
    {
        $output = '<div>';
        return $output;
    }
    public function renderContentWidgetEnd()
    {
        $output = '</div>';
        return $output;
    }    
    
}
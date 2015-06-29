<?php

namespace Itechsup\FormFwk\Renderer;

class TableRenderer implements IRenderer
{
    
    public function renderContentStart()
    {       
        $output = '<table class="renderer">';
        return $output;
    }
    public function renderContentEnd()
    {
        $output = '</table>';
        return $output;
    }
    public function renderContentWidgetStart()
    {
        $output = '<tr><td>';
        return $output;
    }
    public function renderContentWidgetEnd()
    {
        $output = '</td></tr>';
        return $output;
    }
    
}
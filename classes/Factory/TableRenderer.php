<?php

namespace Itechsup\FormFwk\Factory;

class TableRenderer implements IRenderer
{
    
    public function renderContentStart()
    {       
        $output = '<table border="1" style="width : 100%">';
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
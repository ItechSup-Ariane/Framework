<?php

namespace Itechsup\FormFwk\Factory;

class ListRenderer implements IRenderer
{    
    public function renderContentStart()
    {       
        $output = '<ul>';
        return $output;
    }
    public function renderContentEnd()
    {
        $output = '</ul>';
        return $output;
    }
    public function renderContentWidgetStart()
    {
        $output = '<li>';
        return $output;
    }
    public function renderContentWidgetEnd()
    {
        $output = '</li>';
        return $output;
    }
    
}
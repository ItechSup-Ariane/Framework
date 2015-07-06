<?php

namespace Itechsup\FormFwk\Renderer\RendererFactory;

use Itechsup\FormFwk\Renderer\IRenderer;
use Itechsup\FormFwk\Renderer\ListRenderer;
use Itechsup\FormFwk\Renderer\DivRenderer;
use Itechsup\FormFwk\Renderer\TableRenderer;

class RendererFactory
{
    public static function load($renderer)
    {
        
        $classRenderer = $renderer.'Renderer';
        $path = 'Itechsup\FormFwk\Renderer\\';
        if (file_exists($pathRenderer = $path.$classRenderer.'.php')){
            //return new $path.$classRenderer();
            return new Itechsup\FormFwk\Renderer\ListRenderer();
        } else {
            return new Itechsup\FormFwk\Renderer\ListRenderer();
        }
        
    }
    
}

<?php

namespace Itechsup\FormFwk\RendererFactory;

class RendererFactory
{
    public static function load($renderer)
    {
        
        $classRenderer = $renderer.'Renderer';
        $path = 'Itechsup\FormFwk\Renderer\\';
        if (file_exists($pathRenderer = $classRenderer.'.php')){
            return new $path.$classRenderer();
        } else {
            return new Itechsup\FormFwk\Renderer\ListRenderer();
        }
        
    }
    
}

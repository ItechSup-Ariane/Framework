<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer;
/**
 * Description of divRender
 *
 * @author Corentin
 */
class divRender implements InterfaceRenderer
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

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer;
/**
 * Description of ulRender
 *
 * @author Corentin
 */
class ulRender implements InterfaceRenderer
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

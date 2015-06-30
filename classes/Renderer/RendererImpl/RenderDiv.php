<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer\RendererImpl;

use Itechsup\FormFwk\Renderer\Render;

/**
 * Description of RenderDiv
 *
 * @author Thomas
 */
class RenderDiv implements Render
{
    //put your code here
    public function renderTypeStart()
    {
        return '<div>';
    }
    
    public function renderTypeEnd()
    {
        return '</div>';
    }
    
    public function renderElementStart()
    {
        return '';
    }
    
    public function renderElementEnd()
    {
        return '';
    }
}

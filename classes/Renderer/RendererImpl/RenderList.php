<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer\RendererImpl;

use Itechsup\FormFwk\Renderer\Render;

/**
 * Description of RenderList
 *
 * @author Thomas
 */
class RenderList implements Render
{
    //put your code here
    public function renderTypeStart()
    {
        return '<ul>';
    }
    
    public function renderTypeEnd()
    {
        return '</ul>';
    }
    
    public function renderElementStart()
    {
        return '<li>';
    }
    
    public function renderElementEnd()
    {
        return '</li>';
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer\RendererImpl;

use Itechsup\FormFwk\Renderer\Render;

/**
 * Description of RenderTable
 *
 * @author Thomas
 */
class RenderTable implements Render
{
    //put your code here
    public function renderTypeStart()
    {
        return '<table>';
    }
    
    public function renderTypeEnd()
    {
        return '</table>';
    }
    
    public function renderElementStart()
    {
        return '<tr><td>';
    }
    
    public function renderElementEnd()
    {
        return '</td></tr>';
    }
}

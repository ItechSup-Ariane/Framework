<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer;
/**
 * Description of tableRender
 *
 * @author Corentin
 */
class tableRender implements InterfaceRenderer
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

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
    //put your code here
    protected $htmlDeb="<table>";
    protected $htmlFin="</table>";
    
    public function getHtmlDeb()
    {
        return $this->htmlDeb;
    }

    public function getHtmlFin()
    {
        return $this->htmlFin;
    }


}

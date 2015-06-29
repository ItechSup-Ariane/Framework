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

    //put your code here
    protected $htmlDeb="<div>";
    protected $htmlFin="</div>";

    public function getHtmlDeb()
    {
        return $this->htmlDeb;
    }

    public function getHtmlFin()
    {
        return $this->htmlFin;
    }
}

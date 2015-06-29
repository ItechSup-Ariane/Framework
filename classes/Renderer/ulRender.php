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

    //put your code here
    protected $htmlDeb="<ul>";
    protected $htmlFin="</ul>";

    public function getHtmlDeb()
    {
        return $this->htmlDeb;
    }

    public function getHtmlFin()
    {
        return $this->htmlFin;
    }
}

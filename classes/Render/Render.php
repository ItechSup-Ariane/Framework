<?php

namespace Itechsup\FormFwk\Render;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Render
 *
 * @author Pierre
 */
abstract class Render {

    protected $listWidget;

    public function addListWidgets($listWidget) {
        $this->listWidget = $listWidget;
    }

    abstract public function render();
}

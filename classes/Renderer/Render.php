<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer;

/**
 *
 * @author Thomas
 */
interface Render {
    //put your code here
    public function renderTypeStart();
    
    public function renderTypeEnd();
    
    public function renderElementStart();
    
    public function renderElementEnd();
}

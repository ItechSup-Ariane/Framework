<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Renderer;
/**
 *
 * @author Corentin
 */
interface InterfaceRenderer
{
       
     public function renderContentStart();
    
    public function renderContentEnd();
    
    public function renderContentWidgetStart();
    
    public function renderContentWidgetEnd();
    
   
}

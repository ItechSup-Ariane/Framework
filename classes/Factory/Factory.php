<?php

namespace Itechsup\FormFwk\Factory;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factory
 *
 * @author Maxime
 */
abstract class Factory
{
    private $htmlAttributes = [];
    
    function __construct($htmlAttributes=[])
    {
        $this->htmlAttributes = $htmlAttributes;
    }

    abstract public function renderCompleteWidget($widget);
    
    abstract public function renderFormStart();
    
    abstract public function renderFormEnd();
    
    protected function renderHtmlAttributes(){
        $output = '';
        foreach ($this->htmlAttributes as $key => $value) {
            $output .= ' '.$key.'="'.$value.'"';
        }
        return $output;
    }
}

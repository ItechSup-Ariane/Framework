<?php

namespace Itechsup\FormFwk\Renderer;


/**
 * Description of Renderer
 *
 * @author Maxime
 */
abstract class Renderer
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

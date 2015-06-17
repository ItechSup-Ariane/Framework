<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Widget\Choice;

use Itechsup\FormFwk\Widget\WidgetChoice;

/**
 * Description of WidgetRadio
 *
 * @author Thomas
 */
class WidgetRadio extends WidgetChoice
{
    private $type = "radio";
    
    public function render()
    {
        $output = "";
        $output = $this->renderLabel();
        $this->htmlAttributes['type'] = $this->type;
        $this->htmlAttributes['name'] = $this->name;
        $this->htmlAttributes['id'] = $this->getId();
        $strAttributes = $this->renderHtmlAttributes();
        foreach($this->options as $option){
            $output .= '<input ' . $strAttributes . '/>'; 
        }
        return $output;
    }

}

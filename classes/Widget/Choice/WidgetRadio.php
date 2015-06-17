<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Widget\Choice;

use ItechSup\FormFwk\Widget\Choice\AbstractWidgetChoice;

/**
 * Description of WidgetRadio
 *
 * @author Thomas
 */
class WidgetRadio extends AbstractWidgetChoice
{
    private $type = "radio";
    
    public function render()
    {
        $output = $this->renderLabel();
        $this->htmlAttributes['type'] = $this->type;
        $this->htmlAttributes['name'] = $this->name;
        foreach($this->options as $key => $value){
            $this->htmlAttributes['id'] = $this->getId() . $key;
            $this->htmlAttributes['value'] = $key;
            $output .= '<input ' . $this->renderHtmlAttributes() . '/>'; 
            $output .= '<label for="' . $this->getId() . '">' . $value . '</label>';
        }
        return $output;
    }

}

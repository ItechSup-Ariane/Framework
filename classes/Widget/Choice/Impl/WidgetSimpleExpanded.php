<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;
use Itechsup\FormFwk\Widget\WidgetImpl\WidgetRadio;

/**
 * Class WidgetSimpleExpended
 * contains a group of radioboxes with a simple selection
 */
class WidgetSimpleExpanded extends AbstractWidgetChoice
{
    
    /**
     * render function
     * @return string containing the html code to generate the group of radioboxes
     */
    public function render()
    {
        $output = $this->renderLabel();
        foreach($this->options as $valueRadio => $labelRadio){
            // Array case
            if(is_array($labelRadio)){
                // Redefine value for Group
                $legendGroupRadio = $valueRadio;
                $arrayGroupRadio = $labelRadio;
                // Generate HTML for Group
                $output .= '<fieldset><legend>'.$legendGroupRadio.'</legend>';
                foreach($arrayGroupRadio as $valueGroup => $labelGroup){
                    $output .= $this->renderOptions($valueGroup, $labelGroup);
                }
                $output .= '</fieldset>';
            } else {
                $output .= $this->renderOptions($valueRadio, $labelRadio);
            }
        }
        return $output;
    }
    
    private function renderOptions($value, $label){
        $arrayAttributes = ['id' => $this->getId().'_'.$value, 'value' => $value];
        var_dump($value);
        if($this->isOptionSelected($value)){
            $arrayAttributes['checked'] = "";
        }
        $widgetRadio = new WidgetRadio($this->name."[]", $label, $arrayAttributes);
        return $widgetRadio->render();
    }

}

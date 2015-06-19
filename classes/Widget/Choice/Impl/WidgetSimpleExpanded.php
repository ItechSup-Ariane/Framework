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
        foreach($this->options as $key1 => $value1){
            if(is_array($value1)){
                $output .= '<fieldset>';
                foreach($value1 as $key2 => $value2){
                    $output .= $this->buildRadioRender($key1, $value2, $key2);
                }
                $output .= '</fieldset>';
            } else {
                $output .= $this->buildRadioRender($key1, $value1);
            }
        }
        return $output;
    }
    
    private function buildRadioRender($key, $value, $key2 = null){
        $arrayAttributes = ['id' => $this->getId().'_'.$key.$key2, 'value' => $key.$key2];
        var_dump($key.$key2);
        if($this->isOptionSelected($key.$key2)){
            $arrayAttributes['checked'] = "";
        }
        $widgetRadio = new WidgetRadio($this->name."_".$key.$key2."[".$key.$key2."]", $value, $arrayAttributes);
        return $widgetRadio->render();
    }

}

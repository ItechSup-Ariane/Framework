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
 * Description of WidgetRadio
 *
 * @author Thomas
 */
class WidgetSimpleExpendable extends AbstractWidgetChoice
{
    
    public function render()
    {
        $output = $this->renderLabel();
        foreach($this->options as $key => $value){
            $arrayAttributes = ['id' => $this->getId().$key, 'value' => $key];
            if($this->isOptionSelected($key)){
                $arrayAttributes['checked'] = "";
            }
            $widgetRadio = new WidgetRadio($this->name."[]", $value, $arrayAttributes);
            $output .= $widgetRadio->render();
        }
        return $output;
    }

}

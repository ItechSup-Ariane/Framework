<?php
namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;
use Itechsup\FormFwk\Widget\Choice\AbstractWidgetSelect;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * WidgetSelectSimple class : Class to use for the <Select> widget
 *
 * @author Thomas
 */
class WidgetSelectSimple extends AbstractWidgetChoice
{

    /*
    * Render function : Method to render the widget
    * 
    * @return string : the HTML string for display
    */
    public function render()
    {
        $this->options;
        $return = $this->renderlabel().'<select name="'.$this->name.'[]">';
        foreach ($this->options as $key => $value) {
            if (is_array($value)) {
                $return .= $this->renderOptGroup($key, $value);
            } else {
                $return .= $this->renderOptions($key, $value);
            }
        }
        $return .= '</select>';
        
        return $return;
    }
}

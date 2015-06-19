<?php
namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;
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
            if (is_array($value)){
                $return .= '<optgroup label="'.$key.'">';
                foreach ($value as $opt => $lbl) {
                    $return .= $this->renderOptions($opt, $lbl);
                }
                $return .= '</optgroup>';
                
            } else {
                $return .= $this->renderOptions($key, $value);
            }
        }
        $return .= '</select>';
        
        return $return;
    }
    
    /**
     * Render Options : Method to render the options of the select
     * 
     * @param type $key : the key of the option to render
     * @param type $value : the value of the option to render
     * @return string : the HTML string for display
     */
    private function renderOptions($key, $value)
    {
        $return = '<option value="'.$key.'"';
        if ($this->isOptionSelected($key)) {
            $return .= ' selected';
        }
        $return .= '>'.$value.'</option>'; 
        
        return $return;
    }
}

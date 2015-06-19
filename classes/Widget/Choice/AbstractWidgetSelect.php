<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractWidgetSelect
 *
 * @author nathan
 */
class AbstractWidgetSelect extends AbstractWidgetChoice
{

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
    
    private function renderOptGroup($key, $value)
    {
        $return = '<optgroup label="'.$key.'">';
        foreach ($value as $opt => $lbl) {
            $return .= $this->renderOptions($opt, $lbl);
        }
        $return .= '</optgroup>';
        return $return;
    }
}

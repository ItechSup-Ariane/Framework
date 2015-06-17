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
    */
    public function render()
    {
        $this->options;
        $retour = $this->renderlabel().'<select name="'.$this->name.'[]">';
        foreach ($this->options as $key => $value) {
            $retour .= '<option value="'.$value.'"';
            if ($this->isOptionSelected($value)) {
                $retour .= ' selected';
            }
            $retour .= '>'.$value.'</option>';
        }
        $retour .= '</select>';
        
        return $retour;
    }
}

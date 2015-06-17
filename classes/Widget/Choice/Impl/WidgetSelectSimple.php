<?php
namespace Itechsup\FormFwk\Widget\Choice\Impl;

use ItechSup\FormFwk\Widget\Choice\AbstractWidgetChoice;
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
        $retour = "<select name='";
        $retour .= $this->name;
        $retour .= "'>";
        
        foreach ($this->options as $option) {
            $retour .= "<option value='" . $option . "'>";
            $retour .= $this->name . "</options>";
        }
        
        $retour .= "</select>";
        
        return $retour;
    }
}

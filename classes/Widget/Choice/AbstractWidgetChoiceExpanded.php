<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Widget\Choice;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;

/**
 * Description of AbstractWidgetChoiceExpanded
 *
 * @author Thomas
 */
abstract class AbstractWidgetChoiceExpanded extends AbstractWidgetChoice{
    
    /**
     * render function
     * @return string containing the html code to generate the group of radioboxes
     */
    public function renderWidget()
    {
        $output = '';
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
}

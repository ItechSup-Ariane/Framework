<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\WidgetChoice;

/*
<input type="checkbox" name="choix1" value="1" /> label 1
<input type="checkbox" name="choix2" value="2" /> label 2
<input type="checkbox" name="choix3" value="3" /> label 3
<input type="checkbox" name="choix4" value="4" /> label 4
*/

/**
 * Nice OO interface for our Form text Widgets.
 */
class WidgetCheckbox extends WidgetChoice
{
    protected $type = 'checkbox';
    
    /**
     * Renderer for a checkbox widget
     */
    public function render()
    {               
        $output = $this->renderlabel();
        
        $cbKey = 0;
        $cbID = $this->getId();
        // Loop for each options
        foreach($this->options as $cbValue => $cbLabel) {            
            $output .= $this->renderCB($cbKey, $cbID, $cbValue, $cbLabel);
            $cbKey++;
        }

        return $output;
    }
    
    /**
     * Renderer for a checkbox widget
     */
    public function renderCB($cbKey, $cbID, $cbValue, $cbLabel)
    {

        // And to be sure to generate a proper html text input with the proper name...
        $this->htmlAttributes['type'] = $this->type;
        $this->htmlAttributes['name'] = $this->name.'_'.$cbKey;
        $this->htmlAttributes['id'] = $cbID.'_'.$cbKey;        
        
        $this->htmlAttributes['value'] = $cbValue;
        $output .= '<input ';
        $output .= $this->renderHtmlAttributes();
        $output .= '/>';
        $output .= $cbLabel;

        return $output;
    }
}

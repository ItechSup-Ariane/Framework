<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\Impl\WidgetCheckboxSelect;

/*
<input type="checkbox" name="choix1" value="1" /> label 1
<input type="checkbox" name="choix2" value="2" /> label 2
<input type="checkbox" name="choix3" value="3" /> label 3
<input type="checkbox" name="choix4" value="4" /> label 4
*/

/**
 * Nice OO interface for our Form text Widgets.
 */
class WidgetCheckbox extends WidgetCheckboxSelect
{
    protected $type = 'checkbox';
    
    /**
     * Renderer for a list of checkbox widget
     */
    public function render()
    {               
        $output = $this->renderlabel();
        
        $checkboxKey = 0;
        $checkboxId = $this->getId();
        
        // Loop for each options
        foreach($this->options as $checkboxValue => $checkboxLabel) {
            $output .= $this->renderCheckbox($checkboxKey, $checkboxId, $checkboxValue, $checkboxLabel);
            $checkboxKey++;
        }

        return $output;
    }
}

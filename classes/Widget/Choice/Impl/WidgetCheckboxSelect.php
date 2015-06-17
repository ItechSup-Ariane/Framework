<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;

abstract class WidgetCheckboxSelect extends AbstractWidgetChoice
{
    /**
     * Renderer for a checkbox widget
     */
    public function renderCheckbox($checkboxKey, $checkboxId, $checkboxValue, $checkboxLabel)
    {

        // And to be sure to generate a proper html text input with the proper name...
        $this->htmlAttributes['type'] = $this->type;
        $this->htmlAttributes['name'] = $this->name.'_'.$checkboxKey;
        $this->htmlAttributes['id'] = $checkboxId.'_'.$checkboxKey;
        $this->htmlAttributes['value'] = $checkboxValue;
        
        $output .= '<input ';
        $output .= $this->renderHtmlAttributes();
        /*if ($this->isOptionSelected($this->htmlAttributes['name'])) {
            $output .= 'checked ';
        }*/
        $output .= '/>';
        $output .= $checkboxLabel;

        return $output;
    }
}

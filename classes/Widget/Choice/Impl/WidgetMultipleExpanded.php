<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;
use Itechsup\FormFwk\Widget\WidgetImpl\WidgetCheckbox;

class WidgetMultipleExpanded extends AbstractWidgetChoice
{

    public function render()
    {

        $output = $this->renderLabel();

        foreach ($this->options as $valueCheckbox => $labelCheckbox){

            // Array case
            if (is_array($labelCheckbox)) {

                // Redefine value for Group
                $legendGroupCheckbox = $valueCheckbox;
                $arrayGroupCheckbox = $labelCheckbox;

                // Generate HTML for Group
                $output .= '<fieldset><legend>'.$legendGroupCheckbox.'</legend>';
                foreach($arrayGroupCheckbox as $valueGroup => $labelGroup) {
                    $output .= $this->renderOptions($valueGroup, $labelGroup);
                }
                $output .= '</fieldset>';

            } else {
                $output .= $this->renderOptions($valueCheckbox, $labelCheckbox);
            }
        }

        return $output;

    }	

    public function renderOptions($value, $label)
    {

        $output = '';

        $arrayAttributes = ['id' => $this->getId().'_'.$value, 'value' => $value];

        if($this->isOptionSelected($value)){
            $arrayAttributes['checked'] = "";
        }

        $widgetCheckbox = new WidgetCheckbox($this->name.'[]', $label, $arrayAttributes);

        $output .= $widgetCheckbox->render();

        return $output;
    }

}
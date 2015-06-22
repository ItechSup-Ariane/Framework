<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoiceExpanded;
use Itechsup\FormFwk\Widget\WidgetImpl\WidgetCheckbox;

class WidgetMultipleExpanded extends AbstractWidgetChoiceExpanded
{	

    protected function renderOptions($value, $label)
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

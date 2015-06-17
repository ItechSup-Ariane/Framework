<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;
use Itechsup\FormFwk\Widget\Choice\Impl\WidgetCheckboxSelect;

class WidgetMultipleExpendable extends AbstractWidgetChoice
{
    
    public function render()
    {
        $output = $this->renderLabel();
		
		$i=0;
		
        foreach($this->options as $valueCheckbox => $labelCheckbox){
			
			
            $arrayAttributes = ['id' => $this->getId().'_'.$valueCheckbox, 'value' => $valueCheckbox];
			
            if($this->isOptionSelected($valueCheckbox)){
                $arrayAttributes['checked'] = "";
            }
			
            $widgetCheckbox = new WidgetCheckboxSelect($this->name.'['.$i.']', $labelCheckbox, $arrayAttributes);
			
            $output .= str_replace('for', 'class = "checkbox" for',$widgetCheckbox->render());
			
			$widgetCheckbox = null;
			
			$i++;
			
        }
		
        return $output;
    }
}
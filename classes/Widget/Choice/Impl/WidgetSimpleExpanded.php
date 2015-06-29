<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoiceExpanded;
use Itechsup\FormFwk\Widget\WidgetImpl\WidgetRadio;

/**
 * Class WidgetSimpleExpended
 * contains a group of radioboxes with a simple selection
 */
class WidgetSimpleExpanded extends AbstractWidgetChoiceExpanded
{

    protected function renderOptions($value, $label)
    {
        $arrayAttributes = ['id' => $this->getId() . '_' . $value, 'value' => $value];
        if ($this->isOptionSelected($value)) {
            $arrayAttributes['checked'] = "";
        }
        $widgetRadio = new WidgetRadio($this->name . "[]", $label, $arrayAttributes);
        return $widgetRadio->render();
    }

}

<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetSelect;

/**
 * widget multiple list
 */
class WidgetMultiple extends AbstractWidgetSelect
{

    protected $type = 'List';

    /**
     * Renderer HTML code for WidgetMultiple (HTML select multiple)
     * @return string
     */
    public function renderWidget()
    {
        $this->htmlAttributes['multiple'] = "multiple";

        return parent::renderWidget();
    }

}

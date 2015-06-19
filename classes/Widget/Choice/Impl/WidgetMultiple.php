<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;

/**
 * widget multiple list
 */
class WidgetMultiple extends AbstractWidgetChoice
{

    protected $type = 'List';

    /**
     * Renderer HTML code for WidgetMultiple (HTML select multiple)
     * @return string
     */
    public function render()
    {

        // And to be sure to generate a proper html text input with the proper name...
        $this->htmlAttributes['name'] = $this->name."[]";
        $this->htmlAttributes['id'] = $this->getId();
        $this->htmlAttributes['multiple'] = "multiple";

        $output = $this->renderlabel();
        $output .= '<select ';
        $output .= $this->renderHtmlAttributes();
        $output .= '>';
        foreach ($this->options as $key => $value) {
            if (is_array($value)) {
                $output .= $this->renderOptGroup($k, $v);
            } else {
                $output .= $this->renderOption($key, $value);
            }
        }
        $output .= '</select>';

        return $output;
    }

}

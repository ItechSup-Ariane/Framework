<?php

namespace Itechsup\FormFwk\Widget\Choice\Impl;

use Itechsup\FormFwk\Widget\WidgetChoice;

/**
 * Nice OO interface for our Form mail Widgets.
 */
class WidgetMultiple extends WidgetChoice
{

    protected $type = 'List';

    public function render()
    {
        if ($this->data !== null) {
            $this->htmlAttributes['value'] = $this->data;
        }

        // And to be sure to generate a proper html text input with the proper name...
        $this->htmlAttributes['name'] = $this->name;
        $this->htmlAttributes['id'] = $this->getId();

        $output = $this->renderlabel();
        $output .= '<select ';
        $output .= $this->renderHtmlAttributes() . "Multiple";
        $output .= '/>';
        $output .= $this->renderOptions();
        $output .= '</select>';

        return $output;
    }

    public function renderOptions()
    {
        foreach ($this->option as $key => $value) {
            if (is_array($value)) {
                $output .= '<optgroup label="' . $key . '">';
                foreach ($value as $v) {
                    $output .= renderOption($v, $this->data);
                }
                $output .= '</optgroup>';
            }
            $output .= renderOption($key, $this->data);
        }
        return $output;
    }

    public function renderOption($option, $data)
    {
        if (in_array($option, $data)) {
            return '<option selected>' . $option . '</option>';
        }
        return '<option>' . $option . '</option>';
    }

}

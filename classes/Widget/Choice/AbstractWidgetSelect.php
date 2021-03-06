<?php

namespace Itechsup\FormFwk\Widget\Choice;

use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;

/**
 * Description of AbstractWidgetSelect
 *
 * @author nathan
 */
abstract class AbstractWidgetSelect extends AbstractWidgetChoice
{

    public function renderWidget()
    {
        // And to be sure to generate a proper html text input with the proper name...
        $this->htmlAttributes['name'] = $this->name."[]";
        $this->htmlAttributes['id'] = $this->getId();

        $output = '<select ';
        $output .= $this->renderHtmlAttributes();
        $output .= '>';
        foreach ($this->options as $key => $value) {
            if (is_array($value)) {
                $output .= $this->renderOptGroup($key, $value);
            } else {
                $output .= $this->renderOptions($key, $value);
            }
        }
        $output .= '</select>';

        return $output;
    }



/**
 * Render Options : Method to render the options of the select
 * 
 * @param type $key : the key of the option to render
 * @param type $value : the value of the option to render
 * @return string : the HTML string for display
 */
protected function renderOptions($key, $value)
{
    $selected = $this->isOptionSelected($key) ? ' selected' : '';
    return '<option value="'.$key.'"'.$selected.'>'.$value.'</option>';
    }

    protected

    function renderOptGroup($key, $value)
    {
        $return = '<optgroup label="'.$key.'">';
        foreach ($value as $opt => $lbl) {
            $return .= $this->renderOptions($opt, $lbl);
        }
        $return .= '</optgroup>';

        return $return;
    }

}

<?php

/**
 * Description of AbstractWidgetSelect
 *
 * @author nathan
 */
class AbstractWidgetSelect extends AbstractWidgetChoice
{

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

    protected function renderOptGroup($key, $value)
    {
        $return = '<optgroup label="'.$key.'">';
        foreach ($value as $opt => $lbl) {
            $return .= $this->renderOptions($opt, $lbl);
        }
        $return .= '</optgroup>';
        return $return;
    }

}

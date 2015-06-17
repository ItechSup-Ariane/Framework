<?php
namespace Itechsup\FormFwk\Widget\Choice\Impl;
use Itechsup\FormFwk\Widget\Choice\AbstractWidgetChoice;
/**
 * Nice OO interface for our Form mail Widgets.
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
    /**
     * Renderer HTML Code for options and groups of select
     * @return string
     */
    public function renderOptions()
    {
        $output='';
        foreach ($this->options as $key => $value) {
//            if (is_array($value)) {
//                $output .= '<optgroup label="'.$key.'">';
//                foreach ($value as $k=>$v) {
//                    $output .= renderOption($k, $v);
//                }
//                $output .= '</optgroup>';
//            }
            $output .= $this->renderOption($key, $value);
        }
        return $output;
    }
    /**
     * Renderer HTML Code for option of select
     * @param string $option
     * @return string
     */
    public function renderOption($key, $value)
    {
        if ($this->isOptionSelected($key)) {
            return '<option value="'.$key.'" selected>' . $value . '</option>';
        }
        return '<option value="'.$key.'">'.$value.'</option>';
    }
}
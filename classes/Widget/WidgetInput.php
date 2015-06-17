<?php

namespace Itechsup\FormFwk\Widget;

use Itechsup\FormFwk\Widget\Widget;

/**
 * Nice OO superclass for our Form input Widgets.
 */
abstract class WidgetInput extends Widget
{

    /**
     * Renderer for a text widget
     */
    public function render()
    {
        if ($this->data !== null) {
            $this->htmlAttributes['value'] = $this->data;
        }

        // And to be sure to generate a proper html text input with the proper name...
        $this->htmlAttributes['type'] = $this->type;
        $this->htmlAttributes['name'] = $this->name;
        $this->htmlAttributes['id'] = $this->getId();

        $output = $this->renderlabel();
        $output .= '<input ';

        $output .= $this->renderHtmlAttributes();

        $output .= '/>';

        return $output;
    }
}

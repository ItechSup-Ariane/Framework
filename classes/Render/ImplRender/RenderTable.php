<?php

namespace Itechsup\FormFwk\Render\ImplRender;

use Itechsup\FormFwk\Render\Render;

class RenderTable extends Render {

    public function render() {
        $output = "<table>";
        foreach ($this->listWidget as $widget) {
            $output .= "<tr class='widget'>";
            $output .= "<td class='widget_label' >" . $widget->renderLabel() . "</td>";
            $output .= "<td class='widget_contain'>" . $widget->renderWidget() . "</td>";
            $output .= "<td class='widget_error'>" . $widget->renderError() . "</td>";
            $output .= "</tr>";
        }
        $output .= "</table>";
        return $output;
    }

}

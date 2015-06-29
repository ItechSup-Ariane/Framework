<?php

namespace Itechsup\FormFwk\Render\ImplRender;

use Itechsup\FormFwk\Render\Render;

class RenderBlock extends Render {

    public function render() {
        $output = "";
        foreach ($this->listWidget as $widget) {
            $output .= "<div class='widget'>";
            $output .= "<div class='widget_label' >" . $widget->renderLabel() . "</div>";
            $output .= "<div class='widget_contain'>" . $widget->renderWidget() . "</div>";
            $output .= "<div class='widget_error'>" . $widget->renderError() . "</div>";
            $output .= "</div>";
        }
        return $output;
    }

}

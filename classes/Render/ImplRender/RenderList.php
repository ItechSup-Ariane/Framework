<?php

namespace Itechsup\FormFwk\Render\ImplRender;

use Itechsup\FormFwk\Render\Render;

class RenderList extends Render {

    public function render() {
        $output = "";
        foreach ($this->listWidget as $widget) {
            $output .= "<ul class='widget'>";
            $output .= "<li class='widget_label' >" . $widget->renderLabel() . "</li>";
            $output .= "<li class='widget_contain'>" . $widget->renderWidget() . "</li>";
            $output .= "<li class='widget_error'>" . $widget->renderError() . "</li>";
            $output .= "</ul>";
        }
        return $output;
    }

}

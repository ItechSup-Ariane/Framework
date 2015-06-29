<?php

namespace Itechsup\FormFwk\Render\ImplRender;

use Itechsup\FormFwk\Render\Render;

class RenderList extends Render {

    public function render() {
        $output = "<ul>";
        foreach ($this->listWidget as $widget) {
            $output .= "<li>" . $widget->render() . "</li>";
        }
        $output .= "</ul>";
        return $output;
    }

}

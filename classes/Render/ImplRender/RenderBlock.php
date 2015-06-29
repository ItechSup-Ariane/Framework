<?php

namespace Itechsup\FormFwk\Render\ImplRender;

use Itechsup\FormFwk\Render\Render;

class RenderBlock extends Render {

    public function render() {
        $output = "";
        foreach ($this->listWidget as $widget) {
            $output .= "<div>" . $widget->render() . "</div>";
        }
        return $output;
    }

}

<?php

namespace Itechsup\FormFwk\Render\ImplRender;

use Itechsup\FormFwk\Render\Render;

class RenderTable extends Render {

    public function render() {
        $output = "<table>";
        foreach ($this->listWidget as $widget) {
            $output .= "<tr><td>" . $widget->render() . "</td></tr>";
        }
        $output .= "</table>";
        return $output;
    }

}

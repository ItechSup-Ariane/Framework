<?php

namespace Itechsup\FormFwk\Form;

use Itechsup\FormFwk\Widget\Widget;

/**
 * This nice class offers an OO interface for an HTML Form. Enjoy!
 */
class Form
{
    /**
     * Widget holder
     */
    private $widgets = [];

    /**
     * Adds a Widget to our beloved Form.
     *
     * @param Widget $widget the Widget to add
     * @return void
     */
    public function addWidget(Widget $widget)
    {
        $this->widgets[$widget->getName()] = $widget;
    }

    /**
     * Output a nice HTML string for our beloved form.
     *
     * @return string a nice html string
     */
    public function render()
    {
        $output = $this->renderFormStart();
        foreach ($this->widgets as $widget) {
            $output .= $widget->render();
        }
        $output .= $this->renderFormEnd();

        return $output;
    }

    /**
     * Binds user data to the form.
     *
     * @param array $data data to bind the form with
     * @return void
     */
    public function bind($data)
    {
        foreach ($this->widgets as $name => $widget) {
            $widget->bind($data[$name]);
        }
    }

    /**
     * Renders start tag for a form.
     *
     * @return string
     */
    private function renderFormStart()
    {
        return '<form method="POST" action="">';
    }

    /**
     * Renders end tag for a form.
     *
     * @return string
     */
    private function renderFormEnd()
    {
        return '<input type="submit" value="Soumet moi !" /></form>';
    }
}

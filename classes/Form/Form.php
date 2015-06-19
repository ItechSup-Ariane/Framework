<?php

namespace Itechsup\FormFwk\Form;

use Itechsup\FormFwk\Form\ValidatorSchema;

/**
 * This nice class offers an OO interface for an HTML Form. Enjoy!
 */
class Form extends ValidatorSchema
{
    /**
     * Output a nice HTML string for our beloved form.
     *
     * @return string a nice html string
     */
    public function render()
    {
        $output = $this->renderFormStart();
        foreach ($this->widgets as $widget) {
            $output .= $widget[0]->render();
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
            $widget[0]->bind($data[$name]);
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

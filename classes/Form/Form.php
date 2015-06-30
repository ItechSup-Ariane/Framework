<?php

namespace Itechsup\FormFwk\Form;

use Itechsup\FormFwk\Form\ValidatorSchema;
use Itechsup\FormFwk\Renderer\renderDiv;

/**
 * This nice class offers an OO interface for an HTML Form. Enjoy!
 */
class Form
{

    private $schema;

    public function __construct()
    {
        $this->schema = new ValidatorSchema();
    }

    /**
     * Output a nice HTML string for our beloved form.
     *
     * @return string a nice html string
     */
    public function render($renderer)
    {
        
        $output = $this->renderFormStart();
        $output .= $renderer->preRender();
        foreach ($this->schema->getWidgets() as $widget){
            $output .= $renderer->render($widget);
        }
        $output .= $renderer->postRender();
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
        $this->schema->bind($data);
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

    public function addWidget($widget, array $validators = [])
    {
        $this->schema->addWidget($widget, $validators);
    }
    
    public function addGroupWidget(array $widgets = [], $validator)
    {
        $this->schema->addGroupWidget($widgets, $validator);
    }

    public function isValid()
    {
        return $this->schema->isValid();
    }

}

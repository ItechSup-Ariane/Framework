<?php

namespace Itechsup\FormFwk\Form;

use Itechsup\FormFwk\Form\ValidatorSchema;

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
    public function render($format)
    {
        $output = $this->renderFormStart($format);
        foreach ($this->schema->getWidgets() as $widget) {
            $output .= $widget->render($format);
        }
        $output .= $this->renderFormEnd($format);

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
    private function renderFormStart($format)
    {
        switch ($format){
            case 'table':
                return '<form method="POST" action=""><table>';
            case 'list':
                return '<form method="POST" action=""><ul>';
            default:
                return '<form method="POST" action="">';
        }
    }

    /**
     * Renders end tag for a form.
     *
     * @return string
     */
    private function renderFormEnd($format)
    {
        switch ($format){
            case 'table':
                return '</table><input type="submit" value="Soumet moi !" /></form>';
            case 'list':
                return '</ul><input type="submit" value="Soumet moi !" /></form>';
            default:
                return '<input type="submit" value="Soumet moi !" /></form>';
        }
    }

    public function addWidget($widget, array $validators = [])
    {
        $this->schema->addWidget($widget, $validators);
    }

    public function isValid()
    {
        return $this->schema->isValid();
    }

}

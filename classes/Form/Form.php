<?php

namespace Itechsup\FormFwk\Form;

use Itechsup\FormFwk\Form\ValidatorSchema;
use Itechsup\FormFwk\Render\Render;

/**
 * This nice class offers an OO interface for an HTML Form. Enjoy!
 */
class Form {

    private $schema;

    public function __construct() {
        $this->schema = new ValidatorSchema();
    }

    /**
     * Output a nice HTML string for our beloved form.
     *
     * @return string a nice html string
     */
    public function render(Render $render = null) {
        $output = $this->renderFormStart();
        if (empty($render)) {
            foreach ($this->schema->getWidgets() as $widget) {
                $output .= $widget->render();
            }
        } else {
            $render->addListWidgets($this->schema->getWidgets());
            $output .= $render->render();
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
    public function bind($data) {
        $this->schema->bind($data);
    }

    /**
     * Renders start tag for a form.
     *
     * @return string
     */
    private function renderFormStart() {
        return '<form method="POST" action="">';
    }

    /**
     * Renders end tag for a form.
     *
     * @return string
     */
    private function renderFormEnd() {
        return '<input type="submit" value="Soumet moi !" /></form>';
    }

    public function addWidget($widget, array $validators = []) {
        $this->schema->addWidget($widget, $validators);
    }

    public function isValid() {
        return $this->schema->isValid();
    }

    public function addGroupValidator($nameGroupValidator, array $groupValidator) {
        $this->schema->addGroupValidator($nameGroupValidator, $groupValidator);
    }

    public function bindGroupValidator($nameGroupValidator, array $nameWidget) {
        $this->schema->bindGroupValidator($nameGroupValidator, $nameWidget);
    }

}

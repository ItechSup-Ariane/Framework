
<?php

namespace Itechsup\FormFwk\Widget\Choice;

use Itechsup\FormFwk\Widget\Widget;

/**
 * AbstractWidgetChoice offers high level utilities for handing choices in web 
 * form. Awesome!
 *
 * @author Corentin
 */
abstract class AbstractWidgetChoice extends Widget
{

    protected $options = [];

    public function __construct($name, $label = null, $htmlAttributes = [], $options = [])
    {
        parent::__construct($name, $label, $htmlAttributes);
        $this->options = $options;
    }

    protected function isOptionSelected($key)
    {
        return $this->data !== null && array_search($key, $this->data) ;       
    }

}

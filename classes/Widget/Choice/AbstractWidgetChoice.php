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
    /**
     * 
     * @param string $name
     * @param string $label
     * @param array $htmlAttributes
     * @param array $options
     */
    public function __construct($name, $label = null, $htmlAttributes = [], $options = [])
    {
        parent::__construct($name, $label, $htmlAttributes);
        $this->options = $options;
    }
    /**
     * isOptionSelected return a boolean if the the bind $this->data is in the array $option[$key]
     * @param string $key
     * @return boolean
     */
    protected function isOptionSelected($key)
    {
        return $this->data !== null && false !== array_search($key, $this->data);
    }
}

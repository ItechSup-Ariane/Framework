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
     * alas, you won't instanciate this class, because it is abstract. But its __construct is quite nice.
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
     * For a given key we check if the value was binded to this instance. 
     * The key (returned through http request), not the value displayed to the end user.
     * 
     * @param string $key
     * @return boolean
     */
    protected function isOptionSelected($key)
    {
        return $this->data !== null && false !== array_search($key, $this->data);
    }

}

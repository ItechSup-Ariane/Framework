<?php

namespace Itechsup\FormFwk\Widget;

use Itechsup\FormFwk\Widget\Widget;

/**
 * Nice OO superclass for our Form choice Widgets.
 */
abstract class WidgetChoice extends Widget
{
    /** 
     * Value list to select
     *
     * @var array() 
     */
    protected $options = [];

    public function __construct($name, $label = null, $htmlAttributes = [], $options = [])
    {
        parent::__construct($name, $label, $htmlAttributes);
        $this->options = $options;
    }
    
    
}

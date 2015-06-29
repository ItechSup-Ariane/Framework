<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 15:00
 */

namespace Itechsup\FormFwk\HTML\Attribute;

use Itechsup\FormFwk\HTML\Attribute\InterfaceHTMLAttribute;

class HTMLAttributeMultiple implements InterfaceHTMLAttribute
{
    protected $name;
    protected $values = [];

    public function __construct($name, Array $values)
    {
        $this->name = $name;
        $this->values = $values;
    }

    public function render()
    {
        return ' ' . $this->name . '="' . implode(' ', $this->values) . '"';
    }
}
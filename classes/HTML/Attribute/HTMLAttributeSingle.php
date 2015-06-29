<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 14:53
 */

namespace Itechsup\FormFwk\HTML\Attribute;

use Itechsup\FormFwk\HTML\Attribute\InterfaceHTMLAttribute;

class HTMLAttributeSingle implements InterfaceHTMLAttribute
{
    protected $name;
    protected $value;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function render()
    {
        return ' ' . $this->name . '="' . $this->value . '"';
    }
}
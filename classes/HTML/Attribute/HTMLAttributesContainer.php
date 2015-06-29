<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 15:06
 */

namespace Itechsup\FormFwk\HTML\Attribute;

class HTMLAttributesContainer
{
    protected $attributes = [];

    protected $target;

    public function __construct(Array $attributes, $target)
    {
        $this->attributes = $attributes;
        $this->target = $target;
    }
}
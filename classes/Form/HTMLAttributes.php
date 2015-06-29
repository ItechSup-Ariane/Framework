<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 14:07
 */

namespace Itechsup\FormFwk\Form;

class HTMLAttributes
{
    /**
     * @var array
     *  An array of attributes, indexed by attribute type.
     *  Each value is either:
     *  - a single string value (any other attribute than class)
     *  - an array of classes (which are strings).
     *   Classes are the only multiple attributes allowed.
     */
    protected $attributes = [];

    public function __construct(Array $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

//    /**
//     * @param $region string
//     *  The region of we want to get.
//     *
//     * @return mixed
//     *  Returns an array containing the attributes for the selected region,
//     *  or null if this region does not exist in $this->attributes
//     */
//    public function getRegionAttributes($region)
//    {
//        return isset($this->attributes[$region]) ?
//            $this->attributes[$region] :
//            null;
//    }

    public function renderClasses(Array $classes)
    {
        return ' class="' . implode(' ', $classes) . '"';
    }

    public function renderAttribute($name, $attribute)
    {
        return ' ' . $name . '="' . $attribute . '"';
    }

    public function renderRegionAttributes($region)
    {
        $regionAttributes = $this->getRegionAttributes($region);
        if (empty($regionAttributes)) {
            return '';
        }
        $output = ' ';
        foreach ($regionAttributes as $name => $attribute) {
            if (empty($attribute)) {
                continue;
            }
            if ($name == 'class') {
                $output .= $this->renderClasses($attribute);
            } else {
                $output .= $this->renderAttribute($name, $attribute);
            }
        }
        return $output;
    }
}
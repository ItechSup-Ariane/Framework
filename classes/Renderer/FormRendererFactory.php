<?php
/**
 * Created by PhpStorm.
 * User: michel
 * Date: 29/06/15
 * Time: 11:14
 */

namespace Itechsup\FormFwk\Renderer;

class FormRendererFactory
{
    /**
     * Return an instance of a Form Renderer implementation.
     *
     * @param $layout
     *  The form rendering layout to use.
     *
     * @throws \InvalidArgumentException
     *
     * @return mixed
     *  Either the instance if it was implemented, or null if not.
     */
    public static function getRenderer($layout)
    {
        $renderersMap = [
            'table' => 'Itechsup\FormFwk\Renderer\Impl\TableFormRenderer',
            'div' => 'Itechsup\FormFwk\Renderer\Impl\DivFormRenderer',
            'list' => 'Itechsup\FormFwk\Renderer\Impl\ListFormRenderer',
        ];

        if (!array_key_exists($layout, $renderersMap)) {
            throw new \InvalidArgumentException('The form renderer for the layout ' . $layout . ' was not implemented.');
            return null;
        }
        return new $renderersMap[$layout]($htmlAttributes);
    }
}
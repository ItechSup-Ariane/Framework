<?php

namespace Itechsup\FormFwk\Widget;

/**
 * Nice OO interface for our Form Widgets.
 */
abstract class Widget
{

    protected $label = null;
    protected $name = null;
    protected $data = null;
    protected $errors = [];
    protected $htmlAttributes = array();

    public function __construct($name, $label = null, $htmlAttributes = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->htmlAttributes = $htmlAttributes;
    }

    /**
     * Ovveride this in your custom implementation of the widget base class.
     */
    public function render()
    {
        $return = $this->renderLabel();
        $return .= $this->renderWidget();
        $return .= $this->renderError();
        return $return;
    }

    abstract public function renderWidget();

    public function renderError()
    {

        var_dump($this->errors);
        $return= '<span class="warning">'.implode(' ', $this->errors).'</span>';
        var_dump($return);
        return $return;
    }

    /**
     * Returns a string representation of a label markup for our widget.
     *
     * @return string html representation of our widget's label
     */
    protected function renderLabel()
    {
        $label = '';
        if ($this->label !== null) {
            $label = '<label for="'.$this->getId().'">'.$this->label.'</label>';
        }

        return $label;
    }

    /**
     * Bind your data here !
     *
     * @param mixed $data data to bind the widget with
     *
     * @return void
     */
    public function bind($data)
    {
        $this->data = $data;
    }

    /**
     * Properly outputs html code for html attributes. So webby.
     *
     * @return string textual representtaion of html attributes
     */
    protected function renderHtmlAttributes()
    {
        $output = '';
        foreach ($this->htmlAttributes as $key => $value) {
            $output .= $key.'="'.$value.'" ';
        }

        return $output;
    }

    /**
     * Returns an html id for our widget.
     */
    protected function getId()
    {
        // We first look for an id provided by the user
        if (array_key_exists('id', $this->htmlAttributes)) {
            return $this->htmlAttributes['id'];
        }

        // If none found, use the widget's name as id;
        return $this->getName();
    }

    /**
     * Get this Widget's name. Very handy.
     *
     * @return string this widget'ws name
     */
    public function getName()
    {
        return $this->name;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

}

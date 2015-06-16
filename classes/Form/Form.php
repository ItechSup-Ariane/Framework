<?php

namespace Itechsup\FormFwk\Form\Form;

use Itechsup\FormFwk\Widget\Widget;

/**
 * This nice class offers an OO interface for an HTML Form. Enjoy!
 *
 */
class Form
{

	/**
	 * Widget holder
	 */
	private $widget = [];

	/**
	 * Adds a Widget to our beloved Form
	 *
	 * @param Widget $widget the Widget to add
	 * @return void
	 */
	public function addWidget(Widget $widget)
	{
		$this->widgets[$widget->getName()] = $widget;
	}

	/**
	 * Output a nice HTML string for our beloved form.
	 */
	public function render()
	{
		$ouput = $this->renderFormStart();
		foreach ($this->widgets as $widget) {
			$output .= $widget->render();
		}
		$output .= $this->renderFormEnd();
	}

	/**
	 * Binds user data to the form
	 */
	public function bind($data)
	{
		foreach ($this->widgets as $name => $widget) {
			$widget->bind($data[$name]);
		}
	}

	/**
	 * Renders start tag for a form
	 */
	private function renderFormStart()
	{
		return '<form method="POST" action="">';
	}

	/**
	 * Renders end tag for a form
	 */
	private function renderFormEnd()
	{
		return '</form>';
	}
}

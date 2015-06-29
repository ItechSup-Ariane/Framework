<?php

namespace Itechsup\FormFwk\Form;

use Itechsup\FormFwk\Form\ValidatorSchema;

/**
 * This nice class offers an OO interface for an HTML Form. Enjoy!
 */
class Form
{
    private $schema;

    public function __construct()
    {
        $this->schema = new ValidatorSchema();
    }

    /**
     * Output a nice HTML string for our beloved form.
     *
     * @return string a nice html string
     */
    public function render($options = [])
    {   
        $view = isset($options['view']) ? $options['view'] : '';
    
        $output = $this->renderFormStart();        
        $output .= $this->renderContent($view);        
        $output .= $this->renderFormEnd();

        return $output;
    }
    
    public function renderContent($view)
    {        
        $output = $this->renderContentStart($view);
        
        foreach ($this->schema->getWidgets() as $widget) {
            
            $output .= $this->renderContentWidgetStart($view);
            $output .= $widget->render();            
            $output .= $this->renderContentWidgetEnd($view);
        }
        
        $output .= $this->renderContentEnd($view);
        
        return $output;
    }
    
    public function renderContentStart($view)
    {       
        $output = '';
        if ($view == 'table'){
            $output = '<table>';
        } else if ($view == 'list'){
            $output = '<ul>';
        }
        return $output;
    }
    public function renderContentEnd($view)
    {
        $output = '';
        if ($view == 'table'){
            $output = '</table>';
        } else if ($view == 'list'){
            $output = '</ul>';
        }
        return $output;
    }
    public function renderContentWidgetStart($view)
    {
        $output = '';
        if ($view == 'table'){
                $output = '<tr><td>';
        } else if ($view == 'div'){
            $output = '<div style="background-color : red">';
        } else if ($view == 'list'){
            $output = '<li>';
        }
        return $output;
    }
    public function renderContentWidgetEnd($view)
    {
        $output = '';            
        if ($view == 'table'){
            $output = '</td></tr>';
        } else if ($view == 'div'){
            $output = '</div>';
        } else if ($view == 'list'){
            $output = '</li>';
        }        
        return $output;
    }
    
    
    /**
     * Binds user data to the form.
     *
     * @param array $data data to bind the form with
     * @return void
     */
    public function bind($data)
    {
        $this->schema->bind($data);
    }

    /**
     * Renders start tag for a form.
     *
     * @return string
     */
    private function renderFormStart()
    {
        return '<form method="POST" action="">';
    }

    /**
     * Renders end tag for a form.
     *
     * @return string
     */
    private function renderFormEnd()
    {
        return '<input type="submit" value="Soumet moi !" /></form>';
    }

    public function addWidget($widget, array $validators = [])
    {
        $this->schema->addWidget($widget, $validators);
    }
    
    public function addGroupWidget(array $widgets = [], $validator)
    {
        $this->schema->addGroupWidget($widgets, $validator);
    }

    public function isValid()
    {
        return $this->schema->isValid();
    }

}

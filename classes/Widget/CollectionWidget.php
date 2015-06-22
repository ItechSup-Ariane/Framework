<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Itechsup\FormFwk\Widget;

/**
 * Description of CollectionWidget
 *
 * @author nathan
 */
class CollectionWidget {
   private $name;
   private $widgets = [];
   protected $errors = [];
   
   public function __construct($name) 
   {
       $this->name = $name;
   }

   function linkWidgets($widget) 
   {
       $this->widgets[$widget->getName()] = $widget;
       AddCollection($this->widgets);
   }  
   
   public function renderError()
    {
        var_dump($this->errors);
        $return= '<span class="warning">'.implode(' ', $this->errors).'</span>';
        var_dump($return);
        return $return;
    }
   
   function getName() 
   {
       return $this->name;
   }

   function getWidgets() 
   {
       return $this->widgets;
   }
   
   public function setErrors($errors)
    {
        $this->errors = $errors;
    }
}

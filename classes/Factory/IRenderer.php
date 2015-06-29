<?php

namespace Itechsup\FormFwk\Factory;

interface IRenderer
{
    public function renderContentStart();
    
    public function renderContentEnd();
    
    public function renderContentWidgetStart();
    
    public function renderContentWidgetEnd();
    
}
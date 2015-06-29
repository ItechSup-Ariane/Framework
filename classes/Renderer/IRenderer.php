<?php

namespace Itechsup\FormFwk\Renderer;

interface IRenderer
{
    public function renderContentStart();
    
    public function renderContentEnd();
    
    public function renderContentWidgetStart();
    
    public function renderContentWidgetEnd();
    
}
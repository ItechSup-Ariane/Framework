<?php
namespace Itechsup\FormFwk\Renderer;

use Itechsup\FormFwk\Renderer\RendererImpl\RenderTable;
use Itechsup\FormFwk\Renderer\RendererImpl\RenderList;
use Itechsup\FormFwk\Renderer\RendererImpl\RenderDiv;
use Exception;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RenderFactory
 *
 * @author Thomas
 */
class RenderFactory {
    //put your code here
    
    public function getObject($type) {
        switch ($type){
            case 'table':
                return new RenderTable();
            case 'list':
                return new RenderList();
            case 'div':
                return new RenderDiv();
            default :
                throw new Exception("Ce type de rendu n'existe pas");
        }
    }
}

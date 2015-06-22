<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AllCollectionWidget
 *
 * @author nathan
 */
class AllCollectionWidget 
{
    private $collectionsWidgets = [];
    
    public function AddCollection($collectionWidgets)
    {
        if (!in_array($collectionWidgets, $this->collectionsWidgets)) {
            $this->collectionsWidgets[$collectionWidgets->getName()] = $collectionWidgets;
        }
    }
    
    function getCollectionsWidgets() 
    {
        return $this->collectionsWidgets;
    }
}

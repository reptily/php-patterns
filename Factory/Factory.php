<?php

class Factory{
    
    public function create($obj){
        if (class_exists($obj, false) && new $obj instanceof ProductInrerface){
            return new $obj;
        } else {
            throw new Exception('Class not found');
        }
    }
    
}
<?php

class AbstractFactory
{
    
    public function getFactory(string $factory){
        if (class_exists($factory, false) && new $factory instanceof FactoryInterface){
            return new $factory;
        } else {
            throw new Exception('Factory not found');
        }
    }
    
}
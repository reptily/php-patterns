<?php

abstract class Product implements ProductInrerface
{
    private $name;
    private $description;
    
    public function getName(): string{
        return $this->name;
    }
    
    public function getDescription(): string{
        return $this->description;
    }
    
    public function setName($value): void{
        $this->name = $value;
    }
    
    public function setDescription($value): void{
        $this->description = $value;
    }
}
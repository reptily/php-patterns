<?php

class Facade
{
    
    private $product;
    private $category;
    
    public function __construct(Product $product, Category $category){
        $this->product = $product;
        $this->category = $category;
    }
    
    public function addNewProduct($name){
        $id = $this->product->Add($name);
        $result = $this->category->addProduct($id);
        
        return $result;
    }
    
}
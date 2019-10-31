<?php

final class Multiton
{
    
    /**
     *@var Singleton instance[]
     */
    private static $instance = [];
    
    /**
     *@var example var
     */    
    private $name;
    private $time;
    
    /**
     * Create singleton object
     *
     * @param string $name
     */    
    static public function getInstance(string $name){
        return static::$instance[$name] ?? (static::$instance[$name] = new static());
    }
    
    /**
     * construct denied
     */
    private function __construct(){
        //denied
    }
    
    /**
     * clone denied
     */
    private function __clone(){
        //denied
    }
    
    /**
     * wakeup denied
     */
    private function __wakeup(){
        //denied
    }
    
    /**
     * @param string
     * @return string;
     */    
    public function setName($val){
        $this->name = $val;
    }
        
    /**
     * @return string;
     */    
    public function getName(){
        return $this->name;
    }    
}
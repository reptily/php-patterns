<?php

class Singleton
{
    
    /**
     *@var Singleton instance
     */
    private static $instance;
    
    /**
     *@var example var
     */    
    private static $name;
    private static $time;
    
    /**
     * Create singleton object
     */    
    static public function getInstance(){
        return static::$instance ?? (static::$instance = new static());
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
    static public function setName($val){
        self::$name = $val;
    }
        
    /**
     * @return string;
     */    
    static public function getName(){
        return self::$name;
    }
    
    /**
     * @param string
     * @return string;
     */    
    static public function setTime($val){
        self::$time = $val;
    }
        
    /**
     * @return string;
     */    
    static public function getTime(){
        return self::$time;
    }
}
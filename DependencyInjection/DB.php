<?php

class DB
{
    private $config;
    
    public function __construct(Config $config){
        $this->config = $config;
    }
    
    public function Connect(){
        return "connection " . $this->config->getHost() . ":" .$this->config->getPort();
    }
    
}
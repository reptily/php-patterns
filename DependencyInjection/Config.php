<?php

class Config
{
    private $host;
    private $port;
    
    public function __construct(string $host, int $port)
    {
        $this->host = $host;
        $this->port = $port;
    }
    
    public function getHost(){
        return $this->host;
    }
    
    public function getPort(){
        return $this->port;
    }
}
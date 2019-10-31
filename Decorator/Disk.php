<?php

class Disk implements DecoratorInterface
{
    protected $decorator;

    public function __construct(Decorator $decorator)
    {
        $this->decorator = $decorator;
    }
    
    public function operation(): string
    {
        return $this->decorator->operation();
    }
}
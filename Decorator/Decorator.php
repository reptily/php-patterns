<?php
class Decorator implements DecoratorInterface
{
    public function operation(): string
    {
        return "is connect";
    }
}
<?php
class FactoryMailTest implements FactoryInterface
{
    public function create(string $obj){
        if (class_exists($obj, false) && new $obj instanceof MailTestInterface){
            return new $obj;
        } else {
            throw new Exception('Class not found');
        }
    }
}
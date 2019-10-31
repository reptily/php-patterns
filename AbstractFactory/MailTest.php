<?php

class MailTest implements MailTestInterface
{
    public $mail = "test@mail.ru";
    
    public function test(): string{
        return "Test mail: {$this->mail}";
    }
}

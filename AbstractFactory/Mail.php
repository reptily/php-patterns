<?php

class Mail implements MailInterface
{
    public $from = "name@mail.ru";
    
    public function send(string $to): string{
        return "Send to: $to, from: {$this->from}";
    }
}

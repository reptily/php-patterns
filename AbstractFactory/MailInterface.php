<?php

interface MailInterface
{
    public function send(string $to): string;
}
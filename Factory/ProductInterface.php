<?php

interface ProductInrerface
{
    public function getName(): string;
    public function getDescription(): string;
    public function setName($value): void;
    public function setDescription($value): void;
}
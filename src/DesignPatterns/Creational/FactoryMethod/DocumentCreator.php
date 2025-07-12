<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

interface DocumentCreator
{
    public function createDocument(): Document;
    public function processDocument(): string;
}

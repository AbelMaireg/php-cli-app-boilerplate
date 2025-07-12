<?php

namespace App\DesignPatterns\Creational\FactoryMethod\ConcreteDocuments;

use App\DesignPatterns\Creational\FactoryMethod\Document;

class WordDocument implements Document
{
    public function generate(): string
    {
        return "Generated Word document";
    }
}

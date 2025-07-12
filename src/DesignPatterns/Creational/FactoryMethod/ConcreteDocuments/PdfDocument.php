<?php

namespace App\DesignPatterns\Creational\FactoryMethod\ConcreteDocuments;

use App\DesignPatterns\Creational\FactoryMethod\Document;

class PdfDocument implements Document
{
    public function generate(): string
    {
        return "Generated PDF document";
    }
}

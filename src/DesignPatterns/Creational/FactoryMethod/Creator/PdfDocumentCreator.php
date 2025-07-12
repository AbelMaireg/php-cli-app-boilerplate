<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Creator;

use App\DesignPatterns\Creational\FactoryMethod\Document;
use App\DesignPatterns\Creational\FactoryMethod\DocumentCreator;
use App\DesignPatterns\Creational\FactoryMethod\ConcreteDocuments\PdfDocument;

class PdfDocumentCreator implements DocumentCreator
{
    public function createDocument(): Document
    {
        return new PdfDocument();
    }

    public function processDocument(): string
    {
        $document = $this->createDocument();
        return "Processing: " . $document->generate();
    }
}

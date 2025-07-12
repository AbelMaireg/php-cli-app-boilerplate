<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Creator;

use App\DesignPatterns\Creational\FactoryMethod\Document;
use App\DesignPatterns\Creational\FactoryMethod\DocumentCreator;
use App\DesignPatterns\Creational\FactoryMethod\ConcreteDocuments\WordDocument;

class WordDocumentCreator implements DocumentCreator
{
    public function createDocument(): Document
    {
        return new WordDocument();
    }

    public function processDocument(): string
    {
        $document = $this->createDocument();
        return "Processing: " . $document->generate();
    }
}

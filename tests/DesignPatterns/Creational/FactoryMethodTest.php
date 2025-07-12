<?php

namespace Tests\DesignPatterns\Creational;

use PHPUnit\Framework\TestCase;
use App\DesignPatterns\Creational\FactoryMethod\Document;
use App\DesignPatterns\Creational\FactoryMethod\DocumentCreator;
use App\DesignPatterns\Creational\FactoryMethod\Creator\PdfDocumentCreator;
use App\DesignPatterns\Creational\FactoryMethod\Creator\WordDocumentCreator;
use App\DesignPatterns\Creational\FactoryMethod\ConcreteDocuments\WordDocument;
use App\DesignPatterns\Creational\FactoryMethod\ConcreteDocuments\PdfDocument;

class FactoryMethodTest extends TestCase
{
    private Document $wordDocument;
    private Document $pdfDocument;
    private DocumentCreator $pdfDocumentCreator;
    private DocumentCreator $wordDocumentCreator;

    protected function setUp(): void
    {
        $this->pdfDocument = new PdfDocument();
        $this->wordDocument = new WordDocument();
        $this->pdfDocumentCreator = new PdfDocumentCreator();
        $this->wordDocumentCreator = new WordDocumentCreator();
    }

    public function testGenerating(): void
    {
        $this->assertEquals($this->pdfDocument->generate(), "Generated PDF document");
        $this->assertEquals($this->wordDocument->generate(), "Generated Word document");
    }

    public function testProcessing(): void
    {
        $this->assertEquals($this->pdfDocumentCreator->processDocument(), "Processing: Generated PDF document");
        $this->assertEquals($this->wordDocumentCreator->processDocument(), "Processing: Generated Word document");
    }
}

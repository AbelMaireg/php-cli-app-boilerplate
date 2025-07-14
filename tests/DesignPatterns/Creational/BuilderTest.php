<?php

namespace Tests\DesignPatterns\Creational;

use App\DesignPatterns\Creational\Builder\ConcreteQRCodeBuilder;
use App\DesignPatterns\Creational\Builder\QRCodeDirector;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuilderCreatesBasicQRCode(): void
    {
        // Arrange
        $builder = new ConcreteQRCodeBuilder();
        $builder->setContent('https://example.com');

        // Act
        $qrCode = $builder->build();

        // Assert
        $this->assertEquals('https://example.com', $qrCode->getContent());
        $this->assertEquals(200, $qrCode->getSize());
        $this->assertEquals('#000000', $qrCode->getForegroundColor());
        $this->assertEquals('#FFFFFF', $qrCode->getBackgroundColor());
        $this->assertEquals('M', $qrCode->getErrorCorrection());
    }

    public function testBuilderCreatesCustomQRCode(): void
    {
        // Arrange
        $builder = new ConcreteQRCodeBuilder();
        $builder
            ->setContent('https://example.org')
            ->setSize(300)
            ->setForegroundColor('#FF0000')
            ->setBackgroundColor('#FFFF00')
            ->setErrorCorrection('H');

        // Act
        $qrCode = $builder->build();

        // Assert
        $this->assertEquals('https://example.org', $qrCode->getContent());
        $this->assertEquals(300, $qrCode->getSize());
        $this->assertEquals('#FF0000', $qrCode->getForegroundColor());
        $this->assertEquals('#FFFF00', $qrCode->getBackgroundColor());
        $this->assertEquals('H', $qrCode->getErrorCorrection());
    }

    public function testDirectorBuildsBasicQRCode(): void
    {
        // Arrange
        $builder = new ConcreteQRCodeBuilder();
        $director = new QRCodeDirector($builder);

        // Act
        $qrCode = $director->buildBasicQRCode('https://example.net');

        // Assert
        $this->assertEquals('https://example.net', $qrCode->getContent());
        $this->assertEquals(200, $qrCode->getSize());
        $this->assertEquals('#000000', $qrCode->getForegroundColor());
        $this->assertEquals('#FFFFFF', $qrCode->getBackgroundColor());
        $this->assertEquals('M', $qrCode->getErrorCorrection());
    }

    public function testDirectorBuildsCustomQRCode(): void
    {
        // Arrange
        $builder = new ConcreteQRCodeBuilder();
        $director = new QRCodeDirector($builder);

        // Act
        $qrCode = $director->buildCustomQRCode(
            'https://mywebsite.com',
            400,
            '#00FF00',
            '#000000',
            'Q'
        );

        // Assert
        $this->assertEquals('https://mywebsite.com', $qrCode->getContent());
        $this->assertEquals(400, $qrCode->getSize());
        $this->assertEquals('#00FF00', $qrCode->getForegroundColor());
        $this->assertEquals('#000000', $qrCode->getBackgroundColor());
        $this->assertEquals('Q', $qrCode->getErrorCorrection());
    }
}

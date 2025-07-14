<?php

namespace App\DesignPatterns\Creational\Builder;

class QRCodeDirector
{
    private QRCodeBuilder $builder;

    public function __construct(QRCodeBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildBasicQRCode(string $content): QRCode
    {
        return $this->builder
            ->setContent($content)
            ->build();
    }

    public function buildCustomQRCode(
        string $content,
        int $size,
        string $foregroundColor,
        string $backgroundColor,
        string $errorCorrection
    ): QRCode {
        return $this->builder
            ->setContent($content)
            ->setSize($size)
            ->setForegroundColor($foregroundColor)
            ->setBackgroundColor($backgroundColor)
            ->setErrorCorrection($errorCorrection)
            ->build();
    }
}

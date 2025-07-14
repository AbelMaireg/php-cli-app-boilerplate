<?php

namespace App\DesignPatterns\Creational\Builder;

class QRCode
{
    private string $content;
    private int $size;
    private string $foregroundColor;
    private string $backgroundColor;
    private string $errorCorrection;

    public function __construct(
        string $content,
        int $size = 200,
        string $foregroundColor = '#000000',
        string $backgroundColor = '#FFFFFF',
        string $errorCorrection = 'M'
    ) {
        $this->content = $content;
        $this->size = $size;
        $this->foregroundColor = $foregroundColor;
        $this->backgroundColor = $backgroundColor;
        $this->errorCorrection = $errorCorrection;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getForegroundColor(): string
    {
        return $this->foregroundColor;
    }

    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }

    public function getErrorCorrection(): string
    {
        return $this->errorCorrection;
    }

    /**
     * @return array<string,mixed>
     */
    public function toArray(): array
    {
        return [
            'content' => $this->content,
            'size' => $this->size,
            'foregroundColor' => $this->foregroundColor,
            'backgroundColor' => $this->backgroundColor,
            'errorCorrection' => $this->errorCorrection,
        ];
    }
}

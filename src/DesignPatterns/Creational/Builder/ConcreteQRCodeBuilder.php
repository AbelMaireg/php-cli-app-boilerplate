<?php

namespace App\DesignPatterns\Creational\Builder;

class ConcreteQRCodeBuilder implements QRCodeBuilder
{
    private string $content = '';
    private int $size = 200;
    private string $foregroundColor = '#000000';
    private string $backgroundColor = '#FFFFFF';
    private string $errorCorrection = 'M';

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function setForegroundColor(string $color): self
    {
        $this->foregroundColor = $color;
        return $this;
    }

    public function setBackgroundColor(string $color): self
    {
        $this->backgroundColor = $color;
        return $this;
    }

    public function setErrorCorrection(string $level): self
    {
        if (in_array($level, ['L', 'M', 'Q', 'H'])) {
            $this->errorCorrection = $level;
        }
        return $this;
    }

    public function build(): QRCode
    {
        return new QRCode(
            $this->content,
            $this->size,
            $this->foregroundColor,
            $this->backgroundColor,
            $this->errorCorrection
        );
    }
}

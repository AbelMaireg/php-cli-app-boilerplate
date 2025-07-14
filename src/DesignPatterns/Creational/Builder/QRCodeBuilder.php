<?php

namespace App\DesignPatterns\Creational\Builder;

interface QRCodeBuilder
{
    public function setContent(string $content): self;
    public function setSize(int $size): self;
    public function setForegroundColor(string $color): self;
    public function setBackgroundColor(string $color): self;
    public function setErrorCorrection(string $level): self;
    public function build(): QRCode;
}

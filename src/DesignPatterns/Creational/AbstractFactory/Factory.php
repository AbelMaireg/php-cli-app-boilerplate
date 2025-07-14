<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

interface Factory
{
    public function createButton(): Button;
    public function createWindow(): Window;
}

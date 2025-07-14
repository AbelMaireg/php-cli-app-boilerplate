<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Factories;

use App\DesignPatterns\Creational\AbstractFactory\Button;
use App\DesignPatterns\Creational\AbstractFactory\Factory;
use App\DesignPatterns\Creational\AbstractFactory\Mac\MacButton;
use App\DesignPatterns\Creational\AbstractFactory\Mac\MacWindow;

class MacFactory implements Factory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createWindow(): MacWindow
    {
        return new MacWindow();
    }
}

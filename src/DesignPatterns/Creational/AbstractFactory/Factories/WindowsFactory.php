<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Factories;

use App\DesignPatterns\Creational\AbstractFactory\Button;
use App\DesignPatterns\Creational\AbstractFactory\Factory;
use App\DesignPatterns\Creational\AbstractFactory\Windows\WindowsButton;
use App\DesignPatterns\Creational\AbstractFactory\Windows\WindowsWindow;

class WindowsFactory implements Factory
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createWindow(): WindowsWindow
    {
        return new WindowsWindow();
    }
}

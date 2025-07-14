<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Windows;

use App\DesignPatterns\Creational\AbstractFactory\Button;

class WindowsButton implements Button
{
    public function render(): string
    {
        return '<button class="windows-button">Click Me!</button>';
    }
}

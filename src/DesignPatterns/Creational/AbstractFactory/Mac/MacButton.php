<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Mac;

use App\DesignPatterns\Creational\AbstractFactory\Button;

class MacButton implements Button
{
    public function render(): string
    {
        return '<button class="mac-button">Click Me!</button>';
    }
}

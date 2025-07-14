<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Mac;

use App\DesignPatterns\Creational\AbstractFactory\Window;

class MacWindow implements Window
{
    public function render(): string
    {
        return '<div class="mac-window">Window Content</div>';
    }
}

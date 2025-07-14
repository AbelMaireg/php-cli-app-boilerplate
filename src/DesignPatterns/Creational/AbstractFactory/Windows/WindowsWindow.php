<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Windows;

use App\DesignPatterns\Creational\AbstractFactory\Window;

class WindowsWindow implements Window
{
    public function render(): string
    {
        return '<div class="windows-window">Window Content</div>';
    }
}

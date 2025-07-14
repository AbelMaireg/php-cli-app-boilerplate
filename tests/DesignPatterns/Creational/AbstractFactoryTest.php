<?php

namespace Tests\DesignPatterns\Creational;

use PHPUnit\Framework\TestCase;
use App\DesignPatterns\Creational\AbstractFactory\Button;
use App\DesignPatterns\Creational\AbstractFactory\Window;
use App\DesignPatterns\Creational\AbstractFactory\Factories\MacFactory;
use App\DesignPatterns\Creational\AbstractFactory\Mac\MacButton;
use App\DesignPatterns\Creational\AbstractFactory\Mac\MacWindow;
use App\DesignPatterns\Creational\AbstractFactory\Factories\WindowsFactory;
use App\DesignPatterns\Creational\AbstractFactory\Windows\WindowsWindow;
use App\DesignPatterns\Creational\AbstractFactory\Windows\WindowsButton;

class AbstractFactoryTest extends TestCase
{
    public function testWindows(): void
    {
        $factory = new WindowsFactory();
        $button = $factory->createButton();
        $window = $factory->createWindow();

        $this->assertInstanceOf(WindowsButton::class, $button);
        $this->assertInstanceOf(Button::class, $button);
        $this->assertEquals('<button class="windows-button">Click Me!</button>', $button->render());

        $this->assertInstanceOf(WindowsWindow::class, $window);
        $this->assertInstanceOf(Window::class, $window);
        $this->assertEquals('<div class="windows-window">Window Content</div>', $window->render());
    }

    public function testMac(): void
    {
        $factory = new MacFactory();
        $button = $factory->createButton();
        $window = $factory->createWindow();

        $this->assertInstanceOf(MacButton::class, $button);
        $this->assertInstanceOf(Button::class, $button);
        $this->assertEquals('<button class="mac-button">Click Me!</button>', $button->render());

        $this->assertInstanceOf(MacWindow::class, $window);
        $this->assertInstanceOf(Window::class, $window);
        $this->assertEquals('<div class="mac-window">Window Content</div>', $window->render());
    }
}

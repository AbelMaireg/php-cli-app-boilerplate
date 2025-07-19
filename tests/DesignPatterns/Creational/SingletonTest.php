<?php

namespace Tests\DesignPatterns\Creational;

use App\DesignPatterns\Creational\Singleton\Configuration;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingletonInstance(): void
    {
        $config1 = Configuration::getInstance();
        $config2 = Configuration::getInstance();

        $this->assertSame(
            $config1,
            $config2,
            'Configuration instances should be the same'
        );
    }

    public function testSingletonSettings(): void
    {
        $config = Configuration::getInstance();

        $this->assertEquals('localhost', $config->getSetting('database_host'));
        $this->assertEquals('my_database', $config->getSetting('database_name'));
        $this->assertEquals('root', $config->getSetting('database_user'));
        $this->assertEquals('', $config->getSetting('database_password'));

        $config->setSetting('database_host', 'localhost_new');

        $this->assertEquals('localhost_new', $config->getSetting('database_host'));

        $config2 = Configuration::getInstance();

        $this->assertEquals(
            'localhost_new',
            $config2->getSetting('database_host'),
            'Settings should persist across instances'
        );
    }
}

<?php

namespace App\DesignPatterns\Creational\Singleton;

class Configuration
{
    private static ?self $instance = null;
    private array $settings = [];

    private function __construct()
    {
        $this->settings = [
            'database_host' => 'localhost',
            'database_name' => 'my_database',
            'database_user' => 'root',
            'database_password' => '',
        ];
    }

    private function __clone(): void
    {
        // Prevent cloning
    }

    public function __wakeup(): void
    {
        // Prevent unserialization
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getSetting(string $key): mixed
    {
        return $this->settings[$key] ?? null;
    }

    public function setSetting(string $key, mixed $value): void
    {
        $this->settings[$key] = $value;
    }

    public function getAllSettings(): array
    {
        return $this->settings;
    }
}

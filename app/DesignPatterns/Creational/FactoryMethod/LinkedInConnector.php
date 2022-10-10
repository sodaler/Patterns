<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;

/**
 * Конкретный Продукт, который реализует API LinkedIn.
 */
class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        \Debugbar::info("Send HTTP API request to log in user $this->email with" . "password $this->password\n");
    }

    public function logOut(): void
    {
        \Debugbar::info("Send HTTP API request to log out user $this->email\n");
    }

    public function createPost($content): void
    {
        \Debugbar::info("Send HTTP API requests to create a post in LinkedIn timeline.\n");
    }
}

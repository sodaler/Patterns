<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;

/**
 * Конкретный Продукт, который реализует API Facebook.
 */
class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function login(): void
    {
        \Debugbar::info("Send HTTP API request to log in user $this->login with" . "password $this->password\n");
    }

    public function logOut(): void
    {
        \Debugbar::info("Send HTTP API request to log out user $this->login\n");
    }

    public function createPost($content): void
    {
        \Debugbar::info("Send HTTP API requests to create a post in Facebook timeline.\n");
    }
}

<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;

/**
 * Этот Конкретный Создатель поддерживает LinkedIn.
 */
class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}

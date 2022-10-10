<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Interfaces\SocialNetworkConnector;

/**
 * Этот Конкретный Создатель поддерживает Facebook. Данный класс
 * также наследует метод post от родительского класса. Конкретные Создатели —
 * это классы, которые фактически использует Клиент.
 */
class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}

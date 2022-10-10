<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Interfaces;

/**
 * Интерфейс Продукта объявляет поведения различных типов продукта.
 */
interface SocialNetworkConnector
{
    public function login(): void;

    public function logOut(): void;

    public function createPost($content): void;
}

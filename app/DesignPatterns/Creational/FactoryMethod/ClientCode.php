<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

/**
 * Клиентский код может работать с любым подклассом SocialNetworkPoster, так как
 * он не зависит от конкретных классов.
 */
class ClientCode
{
    public function clientCode(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
        // ...
    }

    public static function getDescription() {
        return 'Фабричный метод - это порождающий паттерн проектирования,
         который определяет общий интерфейс для создания объектов в суперклассе,
         позволяя подклассам изменять тип создаваемых объектов.';
    }
}

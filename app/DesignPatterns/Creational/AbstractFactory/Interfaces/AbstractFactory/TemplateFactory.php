<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractFactory;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\PageTemplate;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TemplateRenderer;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TitleTemplate;

/**
 * Интерфейс Абстрактной фабрики объявляет создающие методы для каждого
 * определённого типа продукта.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}

<?php

namespace App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Title;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TitleTemplate;

/**
 * Этот Конкретный Продукт предоставляет шаблоны заголовков страниц Twig.
 */
class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}

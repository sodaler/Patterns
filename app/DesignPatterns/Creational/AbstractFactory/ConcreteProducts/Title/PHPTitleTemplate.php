<?php

namespace App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Title;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TitleTemplate;

/**
 * А этот Конкретный Продукт предоставляет шаблоны заголовков страниц
 * PHPTemplate.
 */
class PHPTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}

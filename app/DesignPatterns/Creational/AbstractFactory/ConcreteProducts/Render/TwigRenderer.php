<?php

namespace App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Render;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TemplateRenderer;

/**
 * Отрисовщик шаблонов Twig.
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}

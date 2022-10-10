<?php

namespace App\DesignPatterns\Creational\AbstractFactory\ConcreteFactories;

use App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Page\TwigPageTemplate;
use App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Render\TwigRenderer;
use App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Title\TwigTitleTemplate;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractFactory\TemplateFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\PageTemplate;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TemplateRenderer;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TitleTemplate;

/**
 * Каждая Конкретная Фабрика соответствует определённому варианту (или
 * семейству) продуктов.
 *
 * Эта Конкретная Фабрика создает шаблоны Twig.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}

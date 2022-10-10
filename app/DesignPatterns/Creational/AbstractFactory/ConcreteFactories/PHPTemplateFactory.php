<?php

namespace App\DesignPatterns\Creational\AbstractFactory\ConcreteFactories;

use App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Page\PHPPageTemplate;
use App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Render\PHPTemplateRenderer;
use App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Title\PHPTitleTemplate;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractFactory\TemplateFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\PageTemplate;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TemplateRenderer;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TitleTemplate;

/**
 * Конкретная Фабрика. Создает шаблоны PHPTemplate.
 */
class PHPTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}

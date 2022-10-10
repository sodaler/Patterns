<?php

namespace App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Page;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\PageTemplate;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TitleTemplate;

/**
 * Шаблон страниц использует под-шаблон заголовков, поэтому мы должны
 * предоставить способ установить объект для этого под-шаблона. Абстрактная
 * фабрика позаботится о том, чтобы подать сюда под-шаблон подходящего типа.
 */
abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}

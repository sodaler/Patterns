<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractFactory\TemplateFactory;

/**
 * Клиентский код. Обратите внимание, что он принимает класс Абстрактной Фабрики
 * в качестве параметра, что позволяет клиенту работать с любым типом конкретной
 * фабрики.
 */
class Page
{
    public $title;

    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    // Вот как вы бы использовали этот шаблон в дальнейшем. Обратите внимание,
    // что класс страницы не зависит ни от классов шаблонов, ни от классов
    // отрисовки.
    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }

    public static function getDescription()
    {
        return 'Абстрактная фабрика - это порождающий паттерн
                проектирования, который позволяет создавать семейства связанных
                объектов, не привязываясь к конкретным классам
                создаваемых объектов.';
    }
}

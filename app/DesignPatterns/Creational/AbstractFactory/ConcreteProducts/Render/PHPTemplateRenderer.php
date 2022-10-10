<?php

namespace App\DesignPatterns\Creational\AbstractFactory\ConcreteProducts\Render;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts\TemplateRenderer;

/**
 * Отрисовщик шаблонов PHPTemplate.
 */
class PHPTemplateRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}

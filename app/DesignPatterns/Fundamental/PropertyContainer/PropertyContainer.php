<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

use App\DesignPatterns\Fundamental\PropertyContainer\Interfaces\PropertyContainerInterface;

/**
 * Class PropertyContainer
 *
 * @package App\DesignPatterns\Fundamental\PropertyContainer
 */
class PropertyContainer implements PropertyContainerInterface
{
    /**
     * @var array
     */
    private $propertyContainer = [];

    public static function getDescription() {
        return 'Контейнер свойств - шаблон, который служит для обеспечения
         возможности уже построенного и развернутого приложения динамически
         расширять свои свойства, а в общем случае, функциональность.' .
         ' Это достигается путем добавления дополнительных свойств своему объекту
         в некоторый "контейнер свойств", вместо расширения класса объекта новыми свойствами.';
    }

    /**
     * @param $propertyName
     * @param $value
     * @return mixed|void
     */
    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    public function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    public function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    public function setProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}

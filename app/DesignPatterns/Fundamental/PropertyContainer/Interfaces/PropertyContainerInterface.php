<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer\Interfaces;

interface PropertyContainerInterface
{
    /**
     * @param $propertyName
     * @param $value
     * @return mixed
     */
    function addProperty($propertyName, $value);

    /**
     * @param $propertyName
     * @return mixed
     */
    function deleteProperty($propertyName);

    /**
     * @param $propertyName
     * @return mixed
     */
    function getProperty($propertyName);

    /**
     * @param $propertyName
     * @param $value
     * @return mixed
     */
    function setProperty($propertyName, $value);
}

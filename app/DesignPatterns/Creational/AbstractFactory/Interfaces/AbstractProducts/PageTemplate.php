<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts;

/**
 * Это еще один тип Абстрактного Продукта, который описывает шаблоны целых
 * страниц.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}

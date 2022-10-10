<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Interfaces\AbstractProducts;

/**
 * Отдельный тип продукты (из About.md - напр. стул, стол и тд.)
 *
 * Каждый отдельный тип продукта должен иметь отдельный интерфейс. Все варианты
 * продукта должны соответствовать одному интерфейсу.
 *
 * Например, этот интерфейс Абстрактного Продукта описывает поведение шаблонов
 * заголовков страниц.
 */
interface TitleTemplate
{
    public function getTemplateString(): string;
}

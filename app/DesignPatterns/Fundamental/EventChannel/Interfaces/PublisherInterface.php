<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Interfaces;

/**
 * Interface PublisherInterface
 *
 * @package App\DesignPatterns\Fundamental\EventChannel\Interfaces
 */
interface PublisherInterface
{
    /**
     * Уведомление подписчиков
     *
     * @param string $data Данные, которыми уведомятся подписчики
     * @return mixed
     */
    public function publish($data);
}

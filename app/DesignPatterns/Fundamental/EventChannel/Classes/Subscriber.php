<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Classes;

use App\DesignPatterns\Fundamental\EventChannel\Interfaces\SubscriberInterface;

/**
 * Class Subscriber
 *
 * @package App\DesignPatterns\Fundamental\EventChannel\Classes
 */
class Subscriber implements SubscriberInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * Subscriber constructor
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $data
     * @return mixed|void
     */
    public function notify($data)
    {
        $msg = "{$this->getName()} оповещен(-а) данными [{$data}]";
        \Debugbar::info($msg);
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }
}

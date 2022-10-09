<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Classes;

use App\DesignPatterns\Fundamental\EventChannel\Interfaces\EventChannelInterface;
use App\DesignPatterns\Fundamental\EventChannel\Interfaces\SubscriberInterface;


/**
 * Class EventChannel
 *
 * @package App\DesignPatterns\Fundamental\EventChannel\Classes
 */
class EventChannel implements EventChannelInterface
{
    /**
     * @var array
     */
    private $topics = [];

    /**
     * @param $topic
     * @param $data
     * @return mixed|void
     */
    public function publish($topic, $data)
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            /** @var SubscriberInterface $subscriber */
            $subscriber->notify($data);
        }
    }

    /**
     * @param $topic
     * @param SubscriberInterface $subscriber
     * @return mixed|void
     */
    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        $msg = "{$subscriber->getName()} подписан(-a) на [{$topic}]";
        \Debugbar::debug($msg);
    }
}

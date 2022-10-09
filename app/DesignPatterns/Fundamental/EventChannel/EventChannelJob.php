<?php

namespace App\DesignPatterns\Fundamental\EventChannel;

use App\DesignPatterns\Fundamental\EventChannel\Classes\EventChannel;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Publisher;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Subscriber;

class EventChannelJob
{
    public function run()
    {
        $newsChannel = new EventChannel();

        $highGardenGroup = new Publisher('highGarden-news', $newsChannel);

        $winterFellNews = new Publisher('winterFell-news', $newsChannel);
        $winterFellDaily = new Publisher('winterFell-news', $newsChannel);

        $sansa = new Subscriber('Sansa Stark');
        $arya = new Subscriber('Arya Stark');
        $cersei = new Subscriber('Cersei Lannister');
        $snow = new Subscriber('Jon Snow');

        $newsChannel->subscribe('highGarden-news', $cersei);
        $newsChannel->subscribe('winterFell-news', $sansa);

        $newsChannel->subscribe('highGarden-news', $arya);
        $newsChannel->subscribe('winterFell-news', $arya);

        $newsChannel->subscribe('winterFell-news', $snow);

        $highGardenGroup->publish('New highGarden post');
        $winterFellNews->publish('New winterFell post');
        $winterFellDaily->publish('New alternative winterFell post');
    }

    public static function getDescription()
    {
        return "Канал событий (event channel) - фундаментальный шаблон проектирования
        используется для создания канала связи и коммуникации через него посредством
        событий. Этот канал обеспечивает возможность разным издателям
        публиковать события и подписчикам, подписываясь на них, получать уведомления.";
    }
}

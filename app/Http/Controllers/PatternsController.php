<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use App\DesignPatterns\Fundamental\EventChannel\EventChannelJob;
use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost;
use App\DesignPatterns\Fundamental\PropertyContainer\PropertyContainer;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PatternsController extends Controller
{
    /**
     * Контейнер свойств (property container)
     *
     * @return Factory|View
     * @throws Exception
     */
    public function propertyContainer()
    {
        $name = 'Контейнер свойств';
        $description = PropertyContainer::getDescription();

        $item = new BlogPost();

        $item->setTitle('Заголовок статьи');
        $item->setCategory(10);

        $item->addProperty('view_count', 100);

        $item->addProperty('last_update', '2030-02-01');
        $item->setProperty('last_update', '2030-02-02');

        $item->addProperty('read_only', true);
        $item->deleteProperty('read_only');

        return view('patterns.propertyContainer', compact('name', 'description', 'item'));
    }

    public function delegation()
    {
        $name = 'Делегирование (Delegation)';
        $description = AppMessenger::getDescription();

        $item = new AppMessenger();

        $item->setSender('sender@mail.ru')
            ->setRecipient('recepient@mail.ru')
            ->setMessage('Hello, email friend!')
            ->send();

        $item->toSms()
            ->setSender('111111111')
            ->setRecipient('222222222')
            ->setMessage('Hello, sms friend')
            ->send();

        \Debugbar::info($item);

        return view('patterns.delegation', compact('name', 'description'));
    }

    /**
     * Демонстрация шаблона проектирования - "Канал событий (Event Channel)"
     * @url http://127.0.0.1:8000/fundamentals/event-channel
     *
     * @return \Illuminate\View\View
     */
    public function EventChannel()
    {
        $name = 'Канал событий (event channel)';
        $description = EventChannelJob::getDescription();

        $item = new EventChannelJob();
        $item->run();

        return view('patterns.eventChannel', compact('name', 'description'));
    }
}

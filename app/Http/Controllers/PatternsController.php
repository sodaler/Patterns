<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Creational\AbstractFactory\ConcreteFactories\PHPTemplateFactory;
use App\DesignPatterns\Creational\AbstractFactory\Page;
use App\DesignPatterns\Creational\FactoryMethod\ClientCode;
use App\DesignPatterns\Creational\FactoryMethod\FacebookPoster;
use App\DesignPatterns\Creational\FactoryMethod\LinkedInPoster;
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

        /**
         * Реализация паттерна интерфейс.
         * Перешли на более высокоуровневый подход, создав объект и вызвав метод.
         * Вся логика и взаимосвязи объектов, работают на стороне (там реализовано на более низкоуровневом подходе)
         */
        $item = new EventChannelJob();
        $item->run();

        return view('patterns.eventChannel', compact('name', 'description'));
    }

    /**
     * Шаблон проектирования Интерфейс
     *
     * @url http://127.0.0.1:8000/fundamentals/interface-principle
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function InterfacePrinciple()
    {
        $name = 'Интерфейс (Interface)';

        $description = 'Интерфейс - основной шаблон проектирования, являющийся общим методом
        для структурирования компьютерных программ для того, чтобы их было проще понять.
        В общем, интерфейс - это класс, который обеспечивает программисту простой или более
        программно-специфический способ доступа к другим классам.
        Интерфейс может содержать набор объектов и обеспечивать простую, высокоуровневую
        функциональность для программиста (например, шаблон Фасад); Он может обеспечивать
        более чистый или более специфический способ использования сложных классов ("класс-обертка");
        Он может использоваться в качестве "клея" между двумя различными API (Шаблон Адаптер);
        А также для многих других целей. Интерфейс - это фундаментальный шаблон, на основе которого
        построены и другие шаблоны. Например, интерфейсными типами являются: Шаблон делегирования,
        Шаблон компоновщик и Шаблон мост. Также не путать шаблон интерфейс и интерфейс - это разные вещи.';

        return view('patterns.interfacePrinciple', compact('name', 'description'));
    }

    /**
     * Порождающий шаблон проектирования Фабричный Метод
     *
     * @url http://127.0.0.1:8000/fundamentals/factory-method
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function FactoryMethod()
    {
        $name = 'Фабричный метод (Factory method)';
        $description = ClientCode::getDescription();

        $client = new ClientCode();
        $client->clientCode(new FacebookPoster("Vasya_Pupkin", "1234567"));
        $client->clientCode(new LinkedInPoster("Vasiliy@mail.ru", "123456"));

        return view('patterns.creational.factoryMethod', compact('name', 'description'));
    }

    /**
     * Порождающий шаблон проектирования Абстрактная фабрика
     *
     * @url http://127.0.0.1:8000/fundamentals/abstract-factory
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function AbstractFactory()
    {
        $name = 'Абстрактная фабрика (Abstract Factory)';
        $description = Page::getDescription();

        /**
         * Теперь в других частях приложения клиентский код может принимать фабричные
         * объекты любого типа.
         */
        $page = new Page('Sample page', 'This is the body.');
        \Debugbar::info("Testing actual rendering with the PHPTemplate factory:\n");
        \Debugbar::info($page->render(new PHPTemplateFactory()));

        return view('patterns.creational.abstractFactory', compact('name', 'description'));
    }
}

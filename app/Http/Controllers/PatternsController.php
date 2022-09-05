<?php

namespace App\Http\Controllers;

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
}

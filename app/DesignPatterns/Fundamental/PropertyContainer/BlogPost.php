<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

/**
 * Class BlogPost
 * @package App/DesignPatterns/Fundamental/PropertyContainer
 */

class BlogPost extends PropertyContainer
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $category_id;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategory(int $category_id): void
    {
        $this->category_id = $category_id;
    }

}

<?php
/**
 * Date: 2016/3/30
 */

namespace DesignPatterns\Behavioral\Iterator;

class Book
{
    private $author;

    private $title;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
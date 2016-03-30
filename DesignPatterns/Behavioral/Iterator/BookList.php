<?php
/**
 * Date: 2016/3/30
 */

namespace DesignPatterns\Behavioral\Iterator;

class BookList implements \Countable
{
    private $books;

    public function getBook($bookNumberToGet)
    {
        if (isset($this->books[$bookNumberToGet])) {
            return $this->books[$bookNumberToGet];
        }

        return null;
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {

            }
        }
    }
}
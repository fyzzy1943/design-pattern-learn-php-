<?php
/**
 * Date: 2016/3/30
 */

namespace Test;

use DesignPatterns\Behavioral\Iterator\Book;
use DesignPatterns\Behavioral\Iterator\BookList;
use DesignPatterns\Behavioral\Iterator\BookListIterator;
use DesignPatterns\Behavioral\Iterator\BookListReverseIterator;

class IteratorTest
{
    protected $bookList;

    protected function setUp()
    {
        $this->bookList = new BookList();
        $this->bookList->addBook(new Book('Foo.1', 'Bar.1'));
        $this->bookList->addBook(new Book('Foo.2', 'Bar.2'));
        $this->bookList->addBook(new Book('Foo.3', 'Bar.3'));
    }

    public function testList()
    {
        $iterator = new BookListIterator($this->bookList);

        while($iterator->valid()){
            var_dump($iterator->current()->getAuthorAndTitle());
            $iterator->next();
        }
    }

    public function testReverseList()
    {
        $iterator = new BookListReverseIterator($this->bookList);

        while($iterator->valid()){
            var_dump($iterator->current()->getAuthorAndTitle());
            $iterator->next();
        }
    }

    public function test()
    {
        echo '<div>Iterator Test</div>';

        $this->setUp();
        $this->testList();
        $this->testReverseList();
    }
}
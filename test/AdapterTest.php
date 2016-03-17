<?php
/**
 * Date: 2016/3/17
 */

namespace Test;

use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\PaperBookInterface;

class AdapterTest
{
    public function getBook()
    {
        return array(
            new Book(),
            new EBookAdapter(new Kindle()),
        );
    }

    public function testClient(PaperBookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }

    public function test()
    {
        echo '<div>Adapter Test</div>';

        // 第二本书为电子书， 但是仍然可以使用纸质书的方法， 客户端无需做出更改
        foreach ($this->getBook() as $book) {
            $this->testClient($book);
        }
    }
}
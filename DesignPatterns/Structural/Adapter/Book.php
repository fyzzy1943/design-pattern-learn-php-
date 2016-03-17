<?php
/**
 * Date: 2016/3/17
 */

namespace DesignPatterns\Structural\Adapter;

class Book implements PaperBookInterface
{
    public function turnPage()
    {
        var_dump(__METHOD__);
    }

    public function open()
    {
        var_dump(__METHOD__);
    }
}
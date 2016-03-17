<?php
/**
 * Date: 2016/3/17
 */

namespace DesignPatterns\Structural\Adapter;

interface PaperBookInterface
{
    /**
     * 翻页方法
     *
     * @return mixed
     */
    public function turnPage();

    /**
     * 打开书方法
     *
     * @return mixed
     */
    public function open();
}
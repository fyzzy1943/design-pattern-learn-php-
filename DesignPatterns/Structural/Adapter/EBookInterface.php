<?php
/**
 * Date: 2016/3/17
 */

namespace DesignPatterns\Structural\Adapter;

interface EBookInterface
{
    /**
     * 翻页
     *
     * @return mixed
     */
    public function pressNext();

    /**
     * 打开
     *
     * @return mixed
     */
    public function pressStart();
}
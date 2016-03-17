<?php
/**
 * Date: 2016/3/17
 */

namespace DesignPatterns\Structural\Adapter;

class EBookAdapter implements PaperBookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * EBookAdapter constructor.
     * 注入电子书接口 EBookInterface
     *
     * @param EBookInterface $ebook
     */
    public function __construct(EBookInterface $ebook)
    {
        $this->eBook = $ebook;
    }

    /**
     * 打开方法转换
     */
    public function open()
    {
        var_dump(__METHOD__);
        $this->eBook->pressStart();
    }

    /**
     * 翻页方法转换
     */
    public function turnPage()
    {
        var_dump(__METHOD__);
        $this->eBook->pressNext();
    }
}
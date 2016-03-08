<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 16:43
 */

namespace DesignPatterns\Creational\AbstractFactory;


abstract class Text implements MediaInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * Text constructor.
     *
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = (string)$text;
    }
}
<?php

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
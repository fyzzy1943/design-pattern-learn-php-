<?php
/**
 * Date: 2016/3/20
 */

namespace DesignPatterns\Structural\Composite;

abstract class FormElement
{
    /**
     * @param int $indent
     * @return mixed
     */
    abstract public function render($indent = 0);
}
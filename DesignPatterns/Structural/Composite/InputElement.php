<?php
/**
 * Date: 2016/3/20
 */

namespace DesignPatterns\Structural\Composite;

class InputElement extends FormElement
{
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . '<input type="text" />';
    }
}
<?php
/**
 * Date: 2016/3/20
 */

namespace DesignPatterns\Structural\Composite;

class Form extends FormElement
{
    /**
     * @var array|FormElement[]
     */
    protected $elements;

    /**
     * 遍历所有元素并调用render方法， 返回完整的表单
     *
     * @param int $indent
     * @return string
     */
    public function render($indent = 0)
    {
        $formCode = '';

        foreach ($this->elements as $element) {
            $formCode .= $element->render($indent+1) . PHP_EOL;
        }

        return $formCode;
    }

    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
    }
}
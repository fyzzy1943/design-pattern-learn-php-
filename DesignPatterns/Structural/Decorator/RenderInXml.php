<?php
/**
 * Date: 2016/3/22
 */

namespace DesignPatterns\Structural\Decorator;

class RenderInXml extends Decorator
{
    /**
     * render data as xml
     *
     * @return string
     */
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        // 想象在这里把 array 转换成 xml ...

        $doc = new \DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}
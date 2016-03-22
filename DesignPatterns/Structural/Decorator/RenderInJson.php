<?php
/**
 * Date: 2016/3/22
 */

namespace DesignPatterns\Structural\Decorator;

class RenderInJson extends Decorator
{
    /**
     * render data as JSON
     *
     * @return string
     */
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        return json_encode($output);
    }
}
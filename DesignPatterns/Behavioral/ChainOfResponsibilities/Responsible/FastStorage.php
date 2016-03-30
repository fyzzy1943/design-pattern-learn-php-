<?php
/**
 * Date: 2016/3/29
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;

class FastStorage extends Handler
{
    /**
     * @var array
     */
    protected $data = array();

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    protected function processing(Request $request)
    {
        if ('get' === $request->verb) {
            if (array_key_exists($request->key, $this->data)) {
                $request->response = $this->data[$request->key];

                return true;
            }
        }

        return false;
    }
}
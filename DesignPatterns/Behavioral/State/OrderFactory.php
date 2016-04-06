<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\State;

class OrderFactory
{
    private function __construct()
    {
        throw new \Exception('Can not instance the OrderFactory class!');
    }

    public static function getOrder($id)
    {
        // 获取订单伪代码
        $order = 'Get Order From Database By $id';

        $order = ['status' => 'created'];

        switch ($order['status']) {
            case 'created':
                return new CreateOrder($order);
            case 'shipping':
                return new ShippingOrder($order);
            default:
                throw new \Exception('Order status error!');
                break;
        }
    }
}
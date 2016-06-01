<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 15:52
 */

namespace VideoRental;


class Customer
{
    /**
     * @var Order[]
     */
    protected $orders = [];

    /**
     * Customer constructor.
     */
    public function __construct()
    {
    }

    public function addOrder($order)
    {
        $this->orders[] = $order;
    }

    public function calculateTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->orders as $order) {
            $totalPrice += $order->calculatePrice();
        }

        return $totalPrice;
    }


}
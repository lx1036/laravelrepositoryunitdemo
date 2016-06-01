<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 17:46
 */

namespace VideoRental;


class TaiwanMovieType extends AbstractMovieType
{

    /**
     * @param int $days
     * @return int
     */
    public function calculatePrice(int $days)
    {
        // TODO: Implement calculatePrice() method.
        $price = 80;
        $price += ($days - 10) * 20;
        return $price;
    }
}
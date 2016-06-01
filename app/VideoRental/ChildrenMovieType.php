<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 17:11
 */

namespace VideoRental;


class ChildrenMovieType extends AbstractMovieType
{

    /**
     * @param int $days
     * @return int
     */
    public function calculatePrice(int $days)
    {
        // TODO: Implement calculatePrice() method.
        $price = 40;
        $price += ($days - 7) * 10;
        return $price;
    }
}
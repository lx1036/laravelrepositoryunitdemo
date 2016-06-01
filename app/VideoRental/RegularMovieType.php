<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 17:07
 */

namespace VideoRental;


class RegularMovieType extends AbstractMovieType
{

    public function calculatePrice(int $days)
    {
        // TODO: Implement calculatePrice() method.
        $price = 100;
        $price += ($days - 7) * 10;
        return $price;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 17:09
 */

namespace VideoRental;


class NewReleaseMovieType extends AbstractMovieType
{

    /**
     * @param int $days
     * @return int
     */
    public function calculatePrice(int $days)
    {
        // TODO: Implement calculatePrice() method.
        $price = 150;
        $price += ($days - 3) * 30;
        return $price;
    }
}
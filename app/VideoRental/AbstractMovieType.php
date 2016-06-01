<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 17:05
 */

namespace VideoRental;


abstract class AbstractMovieType
{
    /**
     * @param int $days
     * @return int
     */
    abstract public function calculatePrice(int $days);
}
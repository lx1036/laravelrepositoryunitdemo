<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 15:49
 */

namespace VideoRental;


class Order
{
    /**
     * @var Movie
     */
    private $movie;
    /**
     * @var int|int
     */
    private $days;

    /**
     * Order constructor.
     * @param Movie $movie
     * @param int $days
     */
    public function __construct(Movie $movie, int $days)
    {
        $this->movie = $movie;
        $this->days = $days;
    }

    /**
     *
     * @return int|int
     */
    public function calculatePrice()
    {
        return $this->getMovie()->movieCaculatePrice($this->getDays());
    }

    /**
     * 回传Movie对象
     * @return Movie
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * 回传Movie租赁天数
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }


}
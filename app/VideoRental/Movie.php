<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 15:47
 */

namespace VideoRental;

use VideoRental\RegularMovieType;
use VideoRental\NewReleaseMovieType;
use VideoRental\ChildrenMovieType;

class Movie
{
    /**
     * @var AbstractMovieType
     */
    private $type;

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = MovieTypeFactory::create($type);
    }

    /**
     * Movie constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->setType($type);
    }

    /**
     * @param int $days
     * @return int
     */
    public  function movieCaculatePrice(int $days)
    {
        return $this->getType()->calculatePrice($days);
    }

    /**
     *回传Movie类型
     * @return string|AbstractMovieType
     */
    public function getType() : AbstractMovieType
    {
        return $this->type;
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 17:31
 */

namespace VideoRental;

use Illuminate\Support\Facades\App;

class MovieTypeFactory
{
    /**
     * @param string $type
     * @return AbstractMovieType
     */
    public static function create(string $type) : AbstractMovieType
    {
        App::bind(AbstractMovieType::class, 'VideoRental\\'.$type.'MovieType');
        return App::make(AbstractMovieType::class);
//        switch ($type) {
//            case 'Regular':
//                return new RegularMovieType();
//            case 'NewRelease':
//                return new NewReleaseMovieType();
//            case 'Children':
//                return new ChildrenMovieType();
//        }
    }
}
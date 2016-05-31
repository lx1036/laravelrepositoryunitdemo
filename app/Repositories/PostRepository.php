<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 上午1:54
 */

namespace App\Repositories;


use App\Post;

class PostRepository
{
    public function getLatest3Posts()
    {
        return Post::orderBy('created_at', 'desc')->take(3)->get();
    }
}
<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Repositories\PostRepository;

class PostRepositoryTest extends TestCase
{
//    use DatabaseTransactions;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
/*
    public function testGetLatest3Posts()
    {
        factory(\App\Post::class, 100)->create();
        $target = \Illuminate\Support\Facades\App::make(PostRepository::class);
        $expected = 3;

        $actual = $target->getLatest3Posts()->count();

        $this->assertEquals($expected, $actual);
    }*/
}

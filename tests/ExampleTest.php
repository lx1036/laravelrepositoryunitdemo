<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    public function testTrue()
    {
        $str = true;
        $this->assertTrue($str);
    }

//    public function testMySQLConnection()
//    {
//        $expected = 0;
//
//        $actual = \App\Post::all();
//
//        $this->assertEquals($expected, count($actual));
//    }
}

<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\PasswordGeneratorService;
use App\Services\PasswordGeneratorHelper;
use Mockery\Mock;

class PasswordGeneratorServiceTest extends TestCase
{
    /**
     * @var PasswordGeneratorService
     */
//    protected $target;
//
//    /**
//     * @var Mock
//     */
//    protected $mock;
//
//    protected function setUp()
//    {
//        parent::setUp(); // TODO: Change the autogenerated stub
//        $this->mock = $this->initMock(PasswordGeneratorHelper::class);
//
//        $this->target = \Illuminate\Support\Facades\App::make(PasswordGeneratorService::class);
//
//    }
//
//    protected function tearDown()
//    {
//        parent::tearDown(); // TODO: Change the autogenerated stub
//        $this->target = null;
//    }
//
//    public function testGenerate6Passwords()
//    {
//        //arrange
////        $origin = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
////        $length = 6;
////        $expected = 'abc123';
//        $this->mock->shouldReceive('str_shuffle')
//            ->once()
//            ->withAnyArgs()
//            ->andReturnUsing(function(string $origin) {
//               return $origin;
//            });
//        $origin = 'abcXYZ123';
//        $length = 6;
//        $expected = 'abcXYZ';
//
//        //act
//        $actual = $this->target->generate($origin, $length);
//
//        //assert
//        $this->assertEquals($expected, $actual);
//
//    }

    public function testTrue()
    {
        $this->assertTrue(true);
    }
}

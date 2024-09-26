<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_数字1のときは文字列1を出力する()
    {
        $this->assertEquals("1", $this->fizzBuzz->convert(1));
    }

    public function test_数字2のときは文字列2を出力する()
    {
        $this->assertEquals("2", $this->fizzBuzz->convert(2));
    }

    public function test_数字3のときは文字列Fizzを出力する()
    {
        $this->assertEquals("Fizz", $this->fizzBuzz->convert(3));
    }

    public function test_数字5のときは文字列Buzzを出力する()
    {
        $this->assertEquals("Buzz", $this->fizzBuzz->convert(5));
    }

    public function test_数字15のときは文字列FizzBuzzを出力する()
    {
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->convert(15));
    }
}

<?php
require_once('./Sample.php');
use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase
{
    public function test()
    {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }
}

<?php
require_once('./Sample.php');
class SampleTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }

}
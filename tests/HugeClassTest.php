<?php


namespace tests;


use PHPUnit\Framework\TestCase;
use App\HugeClass;

class HugeClassTest extends TestCase
{
    /** @test */
    public function it_can_do_firstAction()
    {
        $hugeClass = new HugeClass();
        
        $this->assertEquals('first action', $hugeClass->firstAction());
    }

    /** @test */
    public function it_can_do_secondAction()
    {
        $hugeClass = new HugeClass();

        $this->assertEquals('second action', $hugeClass->secondAction());
    }
}
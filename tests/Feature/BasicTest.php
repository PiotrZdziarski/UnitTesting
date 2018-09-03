<?php

namespace Tests\Feature;

use App\Box;
use Tests\TestCase;

class BasicTest extends TestCase
{
    public function testHasItemInBox()
    {
        $box = new Box(['cat', 'toy', 'torch']);

        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('ball'));
    }


    public function testTakeOneFromBox()
    {
        $box = new Box(['torch']);

        $this->assertEquals('torch', $box->takeOne());

        $this->assertNull($box->takeOne());
    }


    public function testStartsWithALetter()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);

        $results = $box->startsWith('t');

        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        $this->assertEmpty($box->startsWith('s'));
    }
}

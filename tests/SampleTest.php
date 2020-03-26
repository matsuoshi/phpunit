<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function test_range() {
        $sample = new Sample\Sample();

        $this->assertEquals(true, $sample->isInDateRange(20200326, 20200320, 20200327));
    }
}

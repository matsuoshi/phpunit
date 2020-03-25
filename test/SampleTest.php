<?php
 
require_once('vendor/autoload.php');
 
class SampleTest extends PHPUnit\Framework\TestCase
{
    public function test_range() {
        $sample = new Sample\Sample();

        $this->assertEquals(true, $sample->isInDateRange(20200326, 20200320, 20200327));
        $this->assertEquals(false, $sample->isInDateRange(20200319, 20200320, 20200327));
    }
}

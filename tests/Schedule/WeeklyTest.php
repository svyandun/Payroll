<?php
namespace Payroll\Schedule;

use Carbon\Carbon;
use PHPUnit_Framework_TestCase;

class WeeklyTest extends PHPUnit_Framework_TestCase
{
    public function testShouldPay()
    {
        $weekly = new Weekly();

        $wednesday = new Carbon('2016/6/15');
        $this->assertFalse($weekly->shouldPay($wednesday));

        $friday = new Carbon('2016/6/17');
        $this->assertTrue($weekly->shouldPay($friday));
    }
}

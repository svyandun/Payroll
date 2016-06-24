<?php
namespace Payroll\Schedule;

use Carbon\Carbon;
use PHPUnit_Framework_TestCase;

class MonthlyTest extends PHPUnit_Framework_TestCase
{
    public function testShouldPay()
    {
        $monthly = new Monthly();

        $firstDayOfMonth = new Carbon('2016/6/1');
        $this->assertFalse($monthly->shouldPay($firstDayOfMonth));

        $lastDayOfMonth = new Carbon('2016/6/30');
        $this->assertTrue($monthly->shouldPay($lastDayOfMonth ));
    }
}

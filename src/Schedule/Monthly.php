<?php
namespace Payroll\Schedule;

use Carbon\Carbon;

class Monthly implements PaySchedule
{
    public function shouldPay(Carbon $date)
    {
        return $this->isLastDayOfMonth($date);
    }

    private function isLastDayOfMonth(Carbon $date)
    {
        $m1 = $date->month;
        $m2 = $date->addDay()->month;
        return $m1 !== $m2;
    }
}

<?php
namespace Payroll\Schedule;

use Carbon\Carbon;

class Weekly implements PaySchedule
{
    public function shouldPay(Carbon $date)
    {
        return $date->dayOfWeek === Carbon::FRIDAY;
    }
}

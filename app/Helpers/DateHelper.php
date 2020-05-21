<?php


namespace App\Helpers;

use Carbon\CarbonPeriod;

class DateHelper
{
    public static function getDateInRange($startDate, $endDate)
    {
        $dateRange = CarbonPeriod::create($startDate, $endDate);
        $dates = [];
        foreach ($dateRange as $key => $date) {
            $dates[$key] = $date->format('Y-m-d');
        }

        return $dates;
    }

    public static function getMonthInRange($startMonth, $endMonth)
    {
        $monthRange = CarbonPeriod::create($startMonth, $endMonth);
        $months = [];
        foreach ($monthRange as $key => $month) {
            $months[$key] = $month->format('Y-m');
        }

        return $months;
    }
}

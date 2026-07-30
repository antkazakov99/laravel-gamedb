<?php

namespace App\Enums;

enum DatePrecision: string
{
    case Day = 'day';
    case Month = 'month';
    case Quarter = 'quarter';
    case HalfYear = 'half_year';
    case Year = 'year';
}

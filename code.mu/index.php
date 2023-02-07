<?php

declare(strict_types=1);
include 'Classes/Date.php';
include 'Classes/Interval.php';
include 'Classes/Tag.php';

$date = new Date('2025-12-31');

// Data
//echo $date->getYear();  // will display '2025'
//echo $date->getMonth(); // will display '12'
//echo $date->getDay();   // will display '31'
//
//echo $date->getWeekDay();     // will display '3'
//echo $date->getWeekDay('ua'); // will display 'середа'
//echo $date->getWeekDay('en'); // will display 'wednesday'
//
//echo (new Date('2025-12-31'))->addYear(1); // '2026-12-31'
//echo (new Date('2025-12-31'))->addMonth(2); // '2026-02-28'
//echo (new Date('2025-12-31'))->subMonth(1); // '2025-11-30'
//echo (new Date('2025-12-31'))->addDay(1);  // '2026-01-01'
//echo (new Date('2025-12-31'))->format('m-d');
//
//echo (new Date('2025-12-31'))->subDay(3)->addYear(1); // '2026-12-28'
//echo $date;

// Interval
$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');

$interval = new Interval($date1, $date2);

//echo $interval->toDays();   // выведет разницу в днях
//echo $interval->toMonths(); // выведет разницу в месяцах
//echo $interval->toYears();  // выведет разницу в годах



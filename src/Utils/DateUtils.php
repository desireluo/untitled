<?php
declare(strict_types=1);

class DateUtils
{

    public function getLatestMonths(int $number): array
    {
        $str = [];
        for ($i = 0; $i < $number; $i++) {
            $str[$i] = date('Y-m', strtotime('-1month-' . $i . 'month'));

        }
        return $str;
    }
}

$d = new DateUtils();
var_export(date('Y-m', strtotime('-1month-1month-1month')));
echo PHP_EOL;
var_export($d->getLatestMonths(2));
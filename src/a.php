<?php
declare(strict_types=1);

require '../vendor/autoload.php';

use Luoxingchang\Box;

ini_set('memory_limit', '0.001MB');
function a($num)
{
    if ($num == 1) {
        return $num;
    }

    return $num * a($num - 1);
}

//echo a(4);
//echo a(5);
//return 4 * a(3)
//3 * a2

$box = new Box();

$timestamp = $box->getTimestamp();

echo $timestamp;

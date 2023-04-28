<?php
declare(strict_types=1);

function a($num)
{
    if ($num == 1) {
        return $num;
    }

    return $num * a($num - 1);
}

echo a(4);
//return 4 * a(3)
//3 * a2

//2 * a1

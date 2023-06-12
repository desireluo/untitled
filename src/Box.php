<?php
declare(strict_types=1);

namespace Luoxingchang;

use Luoxingchang\Untitled\SecondEnum;

class Box
{
    public const TIMESTAMP = 5 * SecondEnum::ONE_HOUR;


    public function getTimestamp(): int
    {
        return self::TIMESTAMP;
    }
}
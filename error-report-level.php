<?php
declare(strict_types=1);
error_reporting(E_NOTICE | E_ERROR);
$a = 1;

try {
    throw new \Exception('good');

} catch (\Exception $exception) {

    echo $exception->getMessage();
}

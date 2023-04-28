<?php
declare(strict_types=1);
error_reporting(E_ALL);
$a = 1;

try {
    throw new \Exception('good');

} catch (\Exception $exception) {

    echo $exception->getMessage();
}

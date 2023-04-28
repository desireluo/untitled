<?php

use Luoxingchang\Demo;
use Luoxingchang\Untitled\Foo;
use Luoxingchang\Untitled\GoodCat;

require '../vendor/autoload.php';

$join = function (...$string) {
    return implode('-', $string);
};

$foo = new Foo();

$goodCat = new GoodCat();
$goodCat->good();

$demo = new Demo();
$demo->index();

$bindFoo = $join->bindTo($foo, Foo::class);

echo $bindFoo('a', 'b', 'c');
<?php
declare(strict_types=1);


$a = 1;
$b =2;


class Test {

    public function index($a, $b) {
        $c = function () use($a,$b) {

            return $a + $b;
        };

        return $c;

    }
}

class Test2 {

    public function index()
    {

        $test = new Test();

        $c = $test->index(1,2);
        echo $c();
    }
}

$test2 = new Test2();

$test2->index();
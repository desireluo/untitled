<?php
declare(strict_types=1);

class CountUtils
{

    public function countArrayRepeat(): array
    {
        $array = [
            [
                'id' => 1,
                'name' => 'good',
            ],
            [
                'id' => 2,
                'name' => 'well'
            ],
            [
                'id' => 2,
                'name' => 'well'
            ],
            [
                'id' => 2,
                'name' => 'done'
            ]
        ];

        return array_count_values(array_column($array, 'name'));
    }

}

$co = new CountUtils();


var_export(array_column([['id' => 1, 'name' => 'hello'], ['id' => 2, 'name' => 'world'], ['id' => 2, 'name' => 'world']], 'name'));
var_export($co->countArrayRepeat());
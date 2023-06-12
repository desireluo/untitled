<?php
declare(strict_types=1);
require '../../vendor/autoload.php';

class ListUtils
{
    public function in()
    {
        $redis = new Redis();
        try {
            $redis->connect('127.0.0.1', 6379);
        } catch (RedisException $e) {
        }
        $arr = array('h', 'e', 'l', 'l', 'o', 'w', 'o', 'r', 'l', 'd');
        $res = $redis->lRange('mylist', 0, -1);

        foreach ($arr as $v) {

            if (!empty($v)) {

                if (!in_array($v, $res)) {

                    $redis->rPush("mylist", $v);

                }

            }

        }
    }

    public function out()
    {
        $redis = new Redis();
        try {
            $redis->connect('127.0.0.1', 6379);
            $value = $redis->lPop("mylist");

            if ($value) {

                echo "出队的值" . $value;

            } else {

                echo "出队完成";

            }
        } catch (RedisException $e) {
        }


    }
}

$list = new ListUtils();
//$list->in();
$list->out();

<?php
declare(strict_types=1);

$array = array(
    array('id' => 1, 'pid' => 0, 'name' => '河北省'),
    array('id' => 2, 'pid' => 0, 'name' => '北京市'),
    array('id' => 3, 'pid' => 1, 'name' => '邯郸市'),
    array('id' => 4, 'pid' => 2, 'name' => '朝阳区'),
    array('id' => 5, 'pid' => 2, 'name' => '通州区'),
    array('id' => 6, 'pid' => 4, 'name' => '望京'),
    array('id' => 7, 'pid' => 4, 'name' => '酒仙桥'),
    array('id' => 8, 'pid' => 3, 'name' => '永年区'),
    array('id' => 9, 'pid' => 1, 'name' => '武安市'),
);

function getTree($array, $pid = 0, $level = 0): array
{
    //声明静态数组,避免递归调用时,多次声明导致数组覆盖
    static $list = [];
    foreach ($array as $key => $value) {
        //第一次遍历,找到父节点为根节点的节点 也就是pid=0的节点
        if ($value['pid'] == $pid) {
            //父节点为根节点的节点,级别为0，也就是第一级
            $value['level'] = $level;
            //把数组放到list中
            $list[] = $value;
            //把这个节点从数组中移除,减少后续递归消耗
            unset($array[$key]);
            //开始递归,查找父ID为该节点ID的节点,级别则为原级别+1
            getTree($array, $value['id'], $level + 1);
        }
    }
    return $list;
}

$array = getTree($array);
//var_export($array);

function ep($array) {
    foreach ($array as $value) {

        echo str_repeat('--', $value['level']), $value['name'] . PHP_EOL;
    }
}

ep($array);
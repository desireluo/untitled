<?php

$arrays = array([
    'id' => 1,
    'parent_id' => 0,
    'name' => 'A',
], [
    'id' => 2,
    'parent_id' => 1,
    'name' => 'A-1'
], [
    'id' => 3,
    'parent_id' => 2,
    'name' => 'A-1-1'

], [
    'id' => 4,
    'parent_id' => 0,
    'name' => 'B'
], [
    'id' => 5,
    'parent_id' => 0,
    'name' => 'C'

]);
var_export(tree(0, $arrays));


/**
 * @param $id
 * @param $array
 * @return array
 */
function tree($id, $array): array
{
    $result = [];
    $children = children($id, $array);

    foreach ($children as $k => $child) {
        $result[$k] = $child;
        $childResult = tree($child['id'], $array);
        foreach ($childResult as $subChild) {
            $child['children'][] = $subChild;
            $result[$k] = $child;
        }
    }

    return $result;
}

function children($id, $arrays): array
{
    $result = [];
    foreach ($arrays as $v) {
        if ($id == $v['parent_id']) {
            $result[] = $v;
        }
    }
    return $result;
}


<?php
declare(strict_types=1);


/**
 * 重写html-to-markdown类文件
 * 在composer.json中配置自定义files，并重新生成：composer dump-autoload
 * "autoload": {
 * "psr-4": {
 * "app\\": "application"
 * },
 * "files":["extend/html-to-markdown-overwrite/autoload.php"]
 * },
 */
spl_autoload_register(function ($class) {
    $map = [
        'Luoxingchang\Untitled\GoodCat' => __DIR__ . '/GoodCat.php',
    ];

    if (isset($map[$class])) {
//        debug_log($class . ' loaded' . PHP_EOL);
        include $map[$class];
        return true;
    }
// 注意需要设置prepend参数为true
}, true, true);
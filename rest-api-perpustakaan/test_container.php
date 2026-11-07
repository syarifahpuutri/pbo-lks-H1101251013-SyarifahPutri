<?php

require 'vendor/autoload.php';

use App\Core\Container;

$container = new Container();

$container->bind(
    'pesan',
    fn() => 'Container berhasil bekerja!'
);

echo $container->make('pesan') . PHP_EOL;

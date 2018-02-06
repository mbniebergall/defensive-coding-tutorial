<?php

class Something {};

$data = [
    'abc123',
    '123',
    123,
    12.3,
    new Something,
    [],
    ['banana', 'orange'],
    [123, 456, '789A'],
    'true',
    'false',
    true,
    false,
    null,
    fopen(__FILE__, 'r'),
];

foreach ($data as $check) {
    var_dump($check);
    echo PHP_EOL;
    echo 'is_string: ' . (int) is_string($check) . PHP_EOL;
    echo 'is_int: ' . (int) is_int($check) . PHP_EOL;
    echo 'is_float: ' . (int) is_float($check) . PHP_EOL;
    echo 'is_bool: ' . (int) is_bool($check) . PHP_EOL;
    echo 'is_null: ' . (int) is_null($check) . PHP_EOL;
    echo 'is_array: ' . (int) is_array($check) . PHP_EOL;
    echo 'is_object: ' . (int) is_object($check) . PHP_EOL;
    echo 'is_resource: ' . (int) is_resource($check) . PHP_EOL;

    echo '--------------------------------------------------' . PHP_EOL;
}

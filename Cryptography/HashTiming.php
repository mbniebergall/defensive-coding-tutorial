<?php

echo '<pre>';

$password = '5uP3rsEcr#t!';

$algorithms = hash_algos();

$timing = [];

foreach ($algorithms as $algorithm) {
    echo strtoupper($algorithm) . PHP_EOL . PHP_EOL;

    $timeStart = microtime(true);

    for ($i = 0; $i < 500000; $i++) {
        hash($algorithm, $password);
    }

    $timeEnd = microtime(true);
    $totalTime = $timeEnd - $timeStart;

    $timing[strtoupper($algorithm)] = $totalTime;

    echo PHP_EOL . 'Timing: ' . $totalTime . PHP_EOL;

    echo PHP_EOL . '<hr>';


}

foreach ($timing as $algorithm => $time) {
    echo $algorithm . "\t" . $time . PHP_EOL;
}


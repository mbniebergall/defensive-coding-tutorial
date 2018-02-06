<?php

namespace DefensiveCoding;

class Adder
{
    public function add(int $precision, float ...$add) : float
    {
        $sum = 0;
        if ($precision < 0) {
            throw new \Exception('Invalid precision');
        }

        foreach ($add as $number) {
            if (!is_numeric($number)) {
                throw new \Exception('Not a Number: ' . $number);
            }
            $sum = bcadd($sum, $number, $precision);
        }
        return $sum;
    }
}

//$adder = new Adder;
//
//try {
//    echo $adder->add(5, 1.2) . PHP_EOL;
//    echo $adder->add(0, 7.9999, 0.0001) . PHP_EOL;
//    echo $adder->add(8, -3.14, 17, 32.123456789, 8, 1.111) . PHP_EOL;
//    echo $adder->add(-1, 8.5, 2, -1) . PHP_EOL;
//    echo $adder->add(10, 1, 2, 3, 5, 8, 13, 'fibanocci') . PHP_EOL;
//} catch (\TypeError | \Exception $e) {
//    echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
//}


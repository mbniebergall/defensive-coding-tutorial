<?php

namespace DefensiveCoding\Tests\Unit;

require_once __DIR__ . '/../../AddNumbersGood.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use DefensiveCoding\Adder;

class AdderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @dataProvider providerAdd
     */
    public function testAdderAdds(int $precision, float ...$add)
    {
        $adder = new Adder;
        $adderSum = $adder->add($precision, ...$add);

        $sum = 0;
        foreach ($add as $number) {
            $sum = bcadd($sum, $number, $precision);
        }

        $this->assertSame((float) $sum, $adderSum);

    }

    public function providerAdd()
    {
        return [
            [5, 1.2],
            [0, 7.9999, 0.0001],
            [8, -3.14, 17, 32.123456789, 8, 1.111],
            [1, 8.5, 2, -1]
        ];
    }
}

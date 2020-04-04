<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 4/4/19
 * Time: 18:26
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
class DataTest extends TestCase
{
    public function additionProvider()
    {
        return [
          [0, 0, 0],
          [0, 1, 1],
          [1, 0, 1],
          [1, 1, 2]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a+$b);
    }
}
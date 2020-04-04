<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 4/4/19
 * Time: 18:16
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
class OutputTest extends TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputRegex('/^baz(\d*)$/');
        print 'baz' . rand(1, 1000);
    }
}
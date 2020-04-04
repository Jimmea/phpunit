<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 4/4/19
 * Time: 18:16
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
class ExceptionTest extends TestCase
{
    public function testDivByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Division by zero');
        Calculator::div(10, 0);
    }

    public function testAdd()
    {
        $this->assertSame(10, Calculator::add(5, 5));
    }

    /**
     * Provide data for test constructor
     *
     * @return array
     */
    public function dataForTestConstructor()
    {
        return [
            [10, 10],
            [0, 0],
            [-3, 0],
            [10.5, 10],
            [-10.5, 0],
            ['10.5', 10],
            ['string', 0],
        ];
    }


    /**
     * Get a non public property of an object
     *
     * @param object $obj
     * @param string $property
     * @return mixed
     */
    protected function getNonPublicProperty($obj, $property)
    {
        if (!is_object($obj) || !is_string($property)) {
            return null;
        }
        $ref = new \ReflectionProperty(get_class($obj), $property);
        $ref->setAccessible(true);

        return $ref->getValue($obj);
    }

    /**
     * Test constructor
     *
     * @param mixed     $paramLimit
     * @param int|float $expectedLimit
     * @dataProvider dataForTestConstructor
     */
    public function testConstructor($paramLimit, $expectedLimit)
    {
        $cal = new Calculator($paramLimit);
        $limit = $this->getNonPublicProperty($cal, 'limit');
        $value = $this->getNonPublicProperty($cal, 'value');

        $this->assertEquals($expectedLimit, $limit);
        $this->assertEquals(0, $value);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 4/4/19
 * Time: 18:16
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
class RemoteConnectTest extends TestCase
{
    public function testConnectionIsValid()
    {
        $connObj = new RemoteConnect();
        $serverName = 'www.google.com';
        $this->assertTrue($connObj->connectToServer($serverName) !== false);
    }
}
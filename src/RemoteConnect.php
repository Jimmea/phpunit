<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 4/4/19
 * Time: 18:15
 */
declare(strict_types=1);
class RemoteConnect
{
    public function connectToServer($serverName = null)
    {
        if ($serverName)
        {
            $fp = fsockopen($serverName, 80);
            return $fp ? true : false;
        }
    }

    public function returnSampleObject()
    {
        return $this;
    }
}
<?php
/**
 * Created by Marcin.
 * Date: 02.11.2019
 * Time: 22:26
 */

namespace Mrcnpdlk\Api\PocztaTracking;

class Api
{
    /**
     * Api constructor.
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Config $oConfig
     *
     * @throws \Mrcnpdlk\Lib\ConfigurationException
     */
    public function __construct(Config $oConfig = null)
    {
        $oConfig = $oConfig ?? new Config();
    }
}

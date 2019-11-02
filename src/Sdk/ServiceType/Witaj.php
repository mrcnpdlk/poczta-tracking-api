<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Witaj ServiceType
 */
class Witaj extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named witaj
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Witaj $parameters
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\WitajResponse|bool
     */
    public function witaj(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Witaj $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->witaj($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\WitajResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}

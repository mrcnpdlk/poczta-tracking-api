<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wersja ServiceType
 */
class Wersja extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wersja
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\WersjaResponse|bool
     */
    public function wersja()
    {
        try {
            $this->setResult($this->getSoapClient()->wersja());

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\WersjaResponse
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

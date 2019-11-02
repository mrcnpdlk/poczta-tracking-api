<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Maksymalna ServiceType
 */
class Maksymalna extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named maksymalnaLiczbaPrzesylek
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\MaksymalnaLiczbaPrzesylekResponse|bool
     */
    public function maksymalnaLiczbaPrzesylek()
    {
        try {
            $this->setResult($this->getSoapClient()->maksymalnaLiczbaPrzesylek());

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\MaksymalnaLiczbaPrzesylekResponse
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

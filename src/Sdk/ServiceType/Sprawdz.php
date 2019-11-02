<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Sprawdz ServiceType
 */
class Sprawdz extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sprawdzPrzesylkiPl
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPl $parameters
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPlResponse|bool
     */
    public function sprawdzPrzesylkiPl(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPl $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->sprawdzPrzesylkiPl($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named sprawdzPrzesylkePl
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkePl $parameters
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkePlResponse|bool
     */
    public function sprawdzPrzesylkePl(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkePl $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->sprawdzPrzesylkePl($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named sprawdzPrzesylkiOdDo
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDo $parameters
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoResponse|bool
     */
    public function sprawdzPrzesylkiOdDo(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->sprawdzPrzesylkiOdDo($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named sprawdzPrzesylke
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylke $parameters
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkeResponse|bool
     */
    public function sprawdzPrzesylke(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylke $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->sprawdzPrzesylke($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named sprawdzPrzesylkiOdDoPl
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoPl $parameters
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoPlResponse|bool
     */
    public function sprawdzPrzesylkiOdDoPl(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoPl $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->sprawdzPrzesylkiOdDoPl($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named sprawdzPrzesylki
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylki $parameters
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiResponse|bool
     */
    public function sprawdzPrzesylki(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylki $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->sprawdzPrzesylki($parameters));

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkePlResponse|\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkeResponse|\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoPlResponse|\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoResponse|\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPlResponse|\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiResponse
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

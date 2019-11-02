<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sprawdzPrzesylke StructType
 */
class SprawdzPrzesylke extends AbstractStructBase
{
    /**
     * The numer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $numer;

    /**
     * Constructor method for sprawdzPrzesylke
     *
     * @uses SprawdzPrzesylke::setNumer()
     *
     * @param string $numer
     */
    public function __construct($numer = null)
    {
        $this
            ->setNumer($numer);
    }

    /**
     * Get numer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNumer()
    {
        return isset($this->numer) ? $this->numer : null;
    }

    /**
     * Set numer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $numer
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylke
     */
    public function setNumer($numer = null)
    {
        // validation for constraint: string
        if (!is_null($numer) && !is_string($numer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numer, true), gettype($numer)), __LINE__);
        }
        if (is_null($numer) || (is_array($numer) && empty($numer))) {
            unset($this->numer);
        } else {
            $this->numer = $numer;
        }

        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see AbstractStructBase::__set_state()
     *
     * @uses AbstractStructBase::__set_state()
     *
     * @param array $array the exported values
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylke
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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

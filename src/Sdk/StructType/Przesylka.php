<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Przesylka StructType
 */
class Przesylka extends AbstractStructBase
{
    /**
     * The danePrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public $danePrzesylki;
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
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int
     */
    public $status;

    /**
     * Constructor method for Przesylka
     *
     * @uses Przesylka::setDanePrzesylki()
     * @uses Przesylka::setNumer()
     * @uses Przesylka::setStatus()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki $danePrzesylki
     * @param string                                                    $numer
     * @param int                                                       $status
     */
    public function __construct(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki $danePrzesylki = null, $numer = null, $status = null)
    {
        $this
            ->setDanePrzesylki($danePrzesylki)
            ->setNumer($numer)
            ->setStatus($status);
    }

    /**
     * Get danePrzesylki value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki|null
     */
    public function getDanePrzesylki()
    {
        return isset($this->danePrzesylki) ? $this->danePrzesylki : null;
    }

    /**
     * Set danePrzesylki value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki $danePrzesylki
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
     */
    public function setDanePrzesylki(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki $danePrzesylki = null)
    {
        if (is_null($danePrzesylki) || (is_array($danePrzesylki) && empty($danePrzesylki))) {
            unset($this->danePrzesylki);
        } else {
            $this->danePrzesylki = $danePrzesylki;
        }

        return $this;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
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
     * Get status value
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status value
     *
     * @param int $status
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
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

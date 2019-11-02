<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Komunikat StructType
 */
class Komunikat extends AbstractStructBase
{
    /**
     * The przesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek
     */
    public $przesylki;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int
     */
    public $status;

    /**
     * Constructor method for Komunikat
     *
     * @uses Komunikat::setPrzesylki()
     * @uses Komunikat::setStatus()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek $przesylki
     * @param int                                                        $status
     */
    public function __construct(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek $przesylki = null, $status = null)
    {
        $this
            ->setPrzesylki($przesylki)
            ->setStatus($status);
    }

    /**
     * Get przesylki value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek|null
     */
    public function getPrzesylki()
    {
        return isset($this->przesylki) ? $this->przesylki : null;
    }

    /**
     * Set przesylki value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek $przesylki
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat
     */
    public function setPrzesylki(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek $przesylki = null)
    {
        if (is_null($przesylki) || (is_array($przesylki) && empty($przesylki))) {
            unset($this->przesylki);
        } else {
            $this->przesylki = $przesylki;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat
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

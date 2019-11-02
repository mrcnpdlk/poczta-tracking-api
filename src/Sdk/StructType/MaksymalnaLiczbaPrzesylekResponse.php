<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for maksymalnaLiczbaPrzesylekResponse StructType
 */
class MaksymalnaLiczbaPrzesylekResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int
     */
    public $return;

    /**
     * Constructor method for maksymalnaLiczbaPrzesylekResponse
     *
     * @uses MaksymalnaLiczbaPrzesylekResponse::setReturn()
     *
     * @param int $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     *
     * @return int|null
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * Set return value
     *
     * @param int $return
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\MaksymalnaLiczbaPrzesylekResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: int
        if (!is_null($return) && !(is_int($return) || ctype_digit($return))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\MaksymalnaLiczbaPrzesylekResponse
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

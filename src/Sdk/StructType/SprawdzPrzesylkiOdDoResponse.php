<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sprawdzPrzesylkiOdDoResponse StructType
 */
class SprawdzPrzesylkiOdDoResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat
     */
    public $return;

    /**
     * Constructor method for sprawdzPrzesylkiOdDoResponse
     *
     * @uses SprawdzPrzesylkiOdDoResponse::setReturn()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat $return
     */
    public function __construct(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat $return = null)
    {
        $this
            ->setReturn($return);
    }

    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }

    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat $return
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoResponse
     */
    public function setReturn(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDoResponse
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

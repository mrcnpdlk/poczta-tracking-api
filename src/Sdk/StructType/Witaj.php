<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for witaj StructType
 */
class Witaj extends AbstractStructBase
{
    /**
     * The imie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $imie;

    /**
     * Constructor method for witaj
     *
     * @uses Witaj::setImie()
     *
     * @param string $imie
     */
    public function __construct($imie = null)
    {
        $this
            ->setImie($imie);
    }

    /**
     * Get imie value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getImie()
    {
        return isset($this->imie) ? $this->imie : null;
    }

    /**
     * Set imie value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $imie
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Witaj
     */
    public function setImie($imie = null)
    {
        // validation for constraint: string
        if (!is_null($imie) && !is_string($imie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imie, true), gettype($imie)), __LINE__);
        }
        if (is_null($imie) || (is_array($imie) && empty($imie))) {
            unset($this->imie);
        } else {
            $this->imie = $imie;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Witaj
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

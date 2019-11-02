<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Przyczyna StructType
 */
class Przyczyna extends AbstractStructBase
{
    /**
     * The kod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $kod;
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $nazwa;

    /**
     * Constructor method for Przyczyna
     *
     * @uses Przyczyna::setKod()
     * @uses Przyczyna::setNazwa()
     *
     * @param string $kod
     * @param string $nazwa
     */
    public function __construct($kod = null, $nazwa = null)
    {
        $this
            ->setKod($kod)
            ->setNazwa($nazwa);
    }

    /**
     * Get kod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getKod()
    {
        return isset($this->kod) ? $this->kod : null;
    }

    /**
     * Set kod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $kod
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna
     */
    public function setKod($kod = null)
    {
        // validation for constraint: string
        if (!is_null($kod) && !is_string($kod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kod, true), gettype($kod)), __LINE__);
        }
        if (is_null($kod) || (is_array($kod) && empty($kod))) {
            unset($this->kod);
        } else {
            $this->kod = $kod;
        }

        return $this;
    }

    /**
     * Get nazwa value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNazwa()
    {
        return isset($this->nazwa) ? $this->nazwa : null;
    }

    /**
     * Set nazwa value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $nazwa
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna
     */
    public function setNazwa($nazwa = null)
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        if (is_null($nazwa) || (is_array($nazwa) && empty($nazwa))) {
            unset($this->nazwa);
        } else {
            $this->nazwa = $nazwa;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna
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

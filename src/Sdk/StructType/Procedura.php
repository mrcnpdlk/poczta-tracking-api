<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Procedura StructType
 */
class Procedura extends AbstractStructBase
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
     * The kopertaFirmowa
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $kopertaFirmowa;
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
     * The przesylkiPowiazane
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych
     */
    public $przesylkiPowiazane;

    /**
     * Constructor method for Procedura
     *
     * @uses Procedura::setKod()
     * @uses Procedura::setKopertaFirmowa()
     * @uses Procedura::setNazwa()
     * @uses Procedura::setPrzesylkiPowiazane()
     *
     * @param string                                                                $kod
     * @param string                                                                $kopertaFirmowa
     * @param string                                                                $nazwa
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych $przesylkiPowiazane
     */
    public function __construct($kod = null, $kopertaFirmowa = null, $nazwa = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych $przesylkiPowiazane = null)
    {
        $this
            ->setKod($kod)
            ->setKopertaFirmowa($kopertaFirmowa)
            ->setNazwa($nazwa)
            ->setPrzesylkiPowiazane($przesylkiPowiazane);
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura
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
     * Get kopertaFirmowa value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getKopertaFirmowa()
    {
        return isset($this->kopertaFirmowa) ? $this->kopertaFirmowa : null;
    }

    /**
     * Set kopertaFirmowa value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $kopertaFirmowa
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura
     */
    public function setKopertaFirmowa($kopertaFirmowa = null)
    {
        // validation for constraint: string
        if (!is_null($kopertaFirmowa) && !is_string($kopertaFirmowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kopertaFirmowa, true), gettype($kopertaFirmowa)), __LINE__);
        }
        if (is_null($kopertaFirmowa) || (is_array($kopertaFirmowa) && empty($kopertaFirmowa))) {
            unset($this->kopertaFirmowa);
        } else {
            $this->kopertaFirmowa = $kopertaFirmowa;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura
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
     * Get przesylkiPowiazane value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych|null
     */
    public function getPrzesylkiPowiazane()
    {
        return isset($this->przesylkiPowiazane) ? $this->przesylkiPowiazane : null;
    }

    /**
     * Set przesylkiPowiazane value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych $przesylkiPowiazane
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura
     */
    public function setPrzesylkiPowiazane(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych $przesylkiPowiazane = null)
    {
        if (is_null($przesylkiPowiazane) || (is_array($przesylkiPowiazane) && empty($przesylkiPowiazane))) {
            unset($this->przesylkiPowiazane);
        } else {
            $this->przesylkiPowiazane = $przesylkiPowiazane;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura
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

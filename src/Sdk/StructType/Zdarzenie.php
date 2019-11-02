<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Zdarzenie StructType
 */
class Zdarzenie extends AbstractStructBase
{
    /**
     * The czas
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $czas;
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka
     */
    public $jednostka;
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
     * The konczace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool
     */
    public $konczace;
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
     * The przyczyna
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna
     */
    public $przyczyna;

    /**
     * Constructor method for Zdarzenie
     *
     * @uses Zdarzenie::setCzas()
     * @uses Zdarzenie::setJednostka()
     * @uses Zdarzenie::setKod()
     * @uses Zdarzenie::setKonczace()
     * @uses Zdarzenie::setNazwa()
     * @uses Zdarzenie::setPrzyczyna()
     *
     * @param string                                                $czas
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $jednostka
     * @param string                                                $kod
     * @param bool                                                  $konczace
     * @param string                                                $nazwa
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna $przyczyna
     */
    public function __construct($czas = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $jednostka = null, $kod = null, $konczace = null, $nazwa = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna $przyczyna = null)
    {
        $this
            ->setCzas($czas)
            ->setJednostka($jednostka)
            ->setKod($kod)
            ->setKonczace($konczace)
            ->setNazwa($nazwa)
            ->setPrzyczyna($przyczyna);
    }

    /**
     * Get czas value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCzas()
    {
        return isset($this->czas) ? $this->czas : null;
    }

    /**
     * Set czas value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $czas
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie
     */
    public function setCzas($czas = null)
    {
        // validation for constraint: string
        if (!is_null($czas) && !is_string($czas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($czas, true), gettype($czas)), __LINE__);
        }
        if (is_null($czas) || (is_array($czas) && empty($czas))) {
            unset($this->czas);
        } else {
            $this->czas = $czas;
        }

        return $this;
    }

    /**
     * Get jednostka value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka|null
     */
    public function getJednostka()
    {
        return isset($this->jednostka) ? $this->jednostka : null;
    }

    /**
     * Set jednostka value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $jednostka
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie
     */
    public function setJednostka(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $jednostka = null)
    {
        if (is_null($jednostka) || (is_array($jednostka) && empty($jednostka))) {
            unset($this->jednostka);
        } else {
            $this->jednostka = $jednostka;
        }

        return $this;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie
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
     * Get konczace value
     *
     * @return bool|null
     */
    public function getKonczace()
    {
        return $this->konczace;
    }

    /**
     * Set konczace value
     *
     * @param bool $konczace
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie
     */
    public function setKonczace($konczace = null)
    {
        // validation for constraint: boolean
        if (!is_null($konczace) && !is_bool($konczace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($konczace, true), gettype($konczace)), __LINE__);
        }
        $this->konczace = $konczace;

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie
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
     * Get przyczyna value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna|null
     */
    public function getPrzyczyna()
    {
        return isset($this->przyczyna) ? $this->przyczyna : null;
    }

    /**
     * Set przyczyna value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna $przyczyna
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie
     */
    public function setPrzyczyna(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przyczyna $przyczyna = null)
    {
        if (is_null($przyczyna) || (is_array($przyczyna) && empty($przyczyna))) {
            unset($this->przyczyna);
        } else {
            $this->przyczyna = $przyczyna;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie
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

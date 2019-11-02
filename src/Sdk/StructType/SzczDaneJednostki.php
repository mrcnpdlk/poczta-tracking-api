<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SzczDaneJednostki StructType
 */
class SzczDaneJednostki extends AbstractStructBase
{
    /**
     * The dlGeogr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float
     */
    public $dlGeogr;
    /**
     * The godzinyPracy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy
     */
    public $godzinyPracy;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $miejscowosc;
    /**
     * The nrDomu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $nrDomu;
    /**
     * The nrLokalu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $nrLokalu;
    /**
     * The pna
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $pna;
    /**
     * The szerGeogr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float
     */
    public $szerGeogr;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $ulica;

    /**
     * Constructor method for SzczDaneJednostki
     *
     * @uses SzczDaneJednostki::setDlGeogr()
     * @uses SzczDaneJednostki::setGodzinyPracy()
     * @uses SzczDaneJednostki::setMiejscowosc()
     * @uses SzczDaneJednostki::setNrDomu()
     * @uses SzczDaneJednostki::setNrLokalu()
     * @uses SzczDaneJednostki::setPna()
     * @uses SzczDaneJednostki::setSzerGeogr()
     * @uses SzczDaneJednostki::setUlica()
     *
     * @param float                                                    $dlGeogr
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy $godzinyPracy
     * @param string                                                   $miejscowosc
     * @param string                                                   $nrDomu
     * @param string                                                   $nrLokalu
     * @param string                                                   $pna
     * @param float                                                    $szerGeogr
     * @param string                                                   $ulica
     */
    public function __construct($dlGeogr = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy $godzinyPracy = null, $miejscowosc = null, $nrDomu = null, $nrLokalu = null, $pna = null, $szerGeogr = null, $ulica = null)
    {
        $this
            ->setDlGeogr($dlGeogr)
            ->setGodzinyPracy($godzinyPracy)
            ->setMiejscowosc($miejscowosc)
            ->setNrDomu($nrDomu)
            ->setNrLokalu($nrLokalu)
            ->setPna($pna)
            ->setSzerGeogr($szerGeogr)
            ->setUlica($ulica);
    }

    /**
     * Get dlGeogr value
     *
     * @return float|null
     */
    public function getDlGeogr()
    {
        return $this->dlGeogr;
    }

    /**
     * Set dlGeogr value
     *
     * @param float $dlGeogr
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setDlGeogr($dlGeogr = null)
    {
        // validation for constraint: float
        if (!is_null($dlGeogr) && !(is_float($dlGeogr) || is_numeric($dlGeogr))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dlGeogr, true), gettype($dlGeogr)), __LINE__);
        }
        $this->dlGeogr = $dlGeogr;

        return $this;
    }

    /**
     * Get godzinyPracy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy|null
     */
    public function getGodzinyPracy()
    {
        return isset($this->godzinyPracy) ? $this->godzinyPracy : null;
    }

    /**
     * Set godzinyPracy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy $godzinyPracy
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setGodzinyPracy(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy $godzinyPracy = null)
    {
        if (is_null($godzinyPracy) || (is_array($godzinyPracy) && empty($godzinyPracy))) {
            unset($this->godzinyPracy);
        } else {
            $this->godzinyPracy = $godzinyPracy;
        }

        return $this;
    }

    /**
     * Get miejscowosc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMiejscowosc()
    {
        return isset($this->miejscowosc) ? $this->miejscowosc : null;
    }

    /**
     * Set miejscowosc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $miejscowosc
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setMiejscowosc($miejscowosc = null)
    {
        // validation for constraint: string
        if (!is_null($miejscowosc) && !is_string($miejscowosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejscowosc, true), gettype($miejscowosc)), __LINE__);
        }
        if (is_null($miejscowosc) || (is_array($miejscowosc) && empty($miejscowosc))) {
            unset($this->miejscowosc);
        } else {
            $this->miejscowosc = $miejscowosc;
        }

        return $this;
    }

    /**
     * Get nrDomu value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNrDomu()
    {
        return isset($this->nrDomu) ? $this->nrDomu : null;
    }

    /**
     * Set nrDomu value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $nrDomu
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setNrDomu($nrDomu = null)
    {
        // validation for constraint: string
        if (!is_null($nrDomu) && !is_string($nrDomu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrDomu, true), gettype($nrDomu)), __LINE__);
        }
        if (is_null($nrDomu) || (is_array($nrDomu) && empty($nrDomu))) {
            unset($this->nrDomu);
        } else {
            $this->nrDomu = $nrDomu;
        }

        return $this;
    }

    /**
     * Get nrLokalu value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNrLokalu()
    {
        return isset($this->nrLokalu) ? $this->nrLokalu : null;
    }

    /**
     * Set nrLokalu value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $nrLokalu
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setNrLokalu($nrLokalu = null)
    {
        // validation for constraint: string
        if (!is_null($nrLokalu) && !is_string($nrLokalu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrLokalu, true), gettype($nrLokalu)), __LINE__);
        }
        if (is_null($nrLokalu) || (is_array($nrLokalu) && empty($nrLokalu))) {
            unset($this->nrLokalu);
        } else {
            $this->nrLokalu = $nrLokalu;
        }

        return $this;
    }

    /**
     * Get pna value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPna()
    {
        return isset($this->pna) ? $this->pna : null;
    }

    /**
     * Set pna value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $pna
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setPna($pna = null)
    {
        // validation for constraint: string
        if (!is_null($pna) && !is_string($pna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pna, true), gettype($pna)), __LINE__);
        }
        if (is_null($pna) || (is_array($pna) && empty($pna))) {
            unset($this->pna);
        } else {
            $this->pna = $pna;
        }

        return $this;
    }

    /**
     * Get szerGeogr value
     *
     * @return float|null
     */
    public function getSzerGeogr()
    {
        return $this->szerGeogr;
    }

    /**
     * Set szerGeogr value
     *
     * @param float $szerGeogr
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setSzerGeogr($szerGeogr = null)
    {
        // validation for constraint: float
        if (!is_null($szerGeogr) && !(is_float($szerGeogr) || is_numeric($szerGeogr))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($szerGeogr, true), gettype($szerGeogr)), __LINE__);
        }
        $this->szerGeogr = $szerGeogr;

        return $this;
    }

    /**
     * Get ulica value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUlica()
    {
        return isset($this->ulica) ? $this->ulica : null;
    }

    /**
     * Set ulica value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $ulica
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
     */
    public function setUlica($ulica = null)
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
        }
        if (is_null($ulica) || (is_array($ulica) && empty($ulica))) {
            unset($this->ulica);
        } else {
            $this->ulica = $ulica;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SzczDaneJednostki
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

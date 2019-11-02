<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DanePrzesylki StructType
 */
class DanePrzesylki extends AbstractStructBase
{
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $dataNadania;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $format;
    /**
     * The kodKrajuNadania
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $kodKrajuNadania;
    /**
     * The kodKrajuPrzezn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $kodKrajuPrzezn;
    /**
     * The kodRodzPrzes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $kodRodzPrzes;
    /**
     * The krajNadania
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $krajNadania;
    /**
     * The krajPrzezn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $krajPrzezn;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var float
     */
    public $masa;
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
     * The proceduraSerwis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura
     */
    public $proceduraSerwis;
    /**
     * The rodzPrzes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $rodzPrzes;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka
     */
    public $urzadNadania;
    /**
     * The urzadPrzezn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka
     */
    public $urzadPrzezn;
    /**
     * The zakonczonoObsluge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool
     */
    public $zakonczonoObsluge;
    /**
     * The zdarzenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen
     */
    public $zdarzenia;

    /**
     * Constructor method for DanePrzesylki
     *
     * @uses DanePrzesylki::setDataNadania()
     * @uses DanePrzesylki::setFormat()
     * @uses DanePrzesylki::setKodKrajuNadania()
     * @uses DanePrzesylki::setKodKrajuPrzezn()
     * @uses DanePrzesylki::setKodRodzPrzes()
     * @uses DanePrzesylki::setKrajNadania()
     * @uses DanePrzesylki::setKrajPrzezn()
     * @uses DanePrzesylki::setMasa()
     * @uses DanePrzesylki::setNumer()
     * @uses DanePrzesylki::setProceduraSerwis()
     * @uses DanePrzesylki::setRodzPrzes()
     * @uses DanePrzesylki::setUrzadNadania()
     * @uses DanePrzesylki::setUrzadPrzezn()
     * @uses DanePrzesylki::setZakonczonoObsluge()
     * @uses DanePrzesylki::setZdarzenia()
     *
     * @param string                                                   $dataNadania
     * @param string                                                   $format
     * @param string                                                   $kodKrajuNadania
     * @param string                                                   $kodKrajuPrzezn
     * @param string                                                   $kodRodzPrzes
     * @param string                                                   $krajNadania
     * @param string                                                   $krajPrzezn
     * @param float                                                    $masa
     * @param string                                                   $numer
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura    $proceduraSerwis
     * @param string                                                   $rodzPrzes
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka    $urzadNadania
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka    $urzadPrzezn
     * @param bool                                                     $zakonczonoObsluge
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen $zdarzenia
     */
    public function __construct($dataNadania = null, $format = null, $kodKrajuNadania = null, $kodKrajuPrzezn = null, $kodRodzPrzes = null, $krajNadania = null, $krajPrzezn = null, $masa = null, $numer = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura $proceduraSerwis = null, $rodzPrzes = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $urzadNadania = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $urzadPrzezn = null, $zakonczonoObsluge = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen $zdarzenia = null)
    {
        $this
            ->setDataNadania($dataNadania)
            ->setFormat($format)
            ->setKodKrajuNadania($kodKrajuNadania)
            ->setKodKrajuPrzezn($kodKrajuPrzezn)
            ->setKodRodzPrzes($kodRodzPrzes)
            ->setKrajNadania($krajNadania)
            ->setKrajPrzezn($krajPrzezn)
            ->setMasa($masa)
            ->setNumer($numer)
            ->setProceduraSerwis($proceduraSerwis)
            ->setRodzPrzes($rodzPrzes)
            ->setUrzadNadania($urzadNadania)
            ->setUrzadPrzezn($urzadPrzezn)
            ->setZakonczonoObsluge($zakonczonoObsluge)
            ->setZdarzenia($zdarzenia);
    }

    /**
     * Get dataNadania value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDataNadania()
    {
        return isset($this->dataNadania) ? $this->dataNadania : null;
    }

    /**
     * Set dataNadania value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $dataNadania
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setDataNadania($dataNadania = null)
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        if (is_null($dataNadania) || (is_array($dataNadania) && empty($dataNadania))) {
            unset($this->dataNadania);
        } else {
            $this->dataNadania = $dataNadania;
        }

        return $this;
    }

    /**
     * Get format value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFormat()
    {
        return isset($this->format) ? $this->format : null;
    }

    /**
     * Set format value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $format
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        if (is_null($format) || (is_array($format) && empty($format))) {
            unset($this->format);
        } else {
            $this->format = $format;
        }

        return $this;
    }

    /**
     * Get kodKrajuNadania value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getKodKrajuNadania()
    {
        return isset($this->kodKrajuNadania) ? $this->kodKrajuNadania : null;
    }

    /**
     * Set kodKrajuNadania value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $kodKrajuNadania
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setKodKrajuNadania($kodKrajuNadania = null)
    {
        // validation for constraint: string
        if (!is_null($kodKrajuNadania) && !is_string($kodKrajuNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodKrajuNadania, true), gettype($kodKrajuNadania)), __LINE__);
        }
        if (is_null($kodKrajuNadania) || (is_array($kodKrajuNadania) && empty($kodKrajuNadania))) {
            unset($this->kodKrajuNadania);
        } else {
            $this->kodKrajuNadania = $kodKrajuNadania;
        }

        return $this;
    }

    /**
     * Get kodKrajuPrzezn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getKodKrajuPrzezn()
    {
        return isset($this->kodKrajuPrzezn) ? $this->kodKrajuPrzezn : null;
    }

    /**
     * Set kodKrajuPrzezn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $kodKrajuPrzezn
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setKodKrajuPrzezn($kodKrajuPrzezn = null)
    {
        // validation for constraint: string
        if (!is_null($kodKrajuPrzezn) && !is_string($kodKrajuPrzezn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodKrajuPrzezn, true), gettype($kodKrajuPrzezn)), __LINE__);
        }
        if (is_null($kodKrajuPrzezn) || (is_array($kodKrajuPrzezn) && empty($kodKrajuPrzezn))) {
            unset($this->kodKrajuPrzezn);
        } else {
            $this->kodKrajuPrzezn = $kodKrajuPrzezn;
        }

        return $this;
    }

    /**
     * Get kodRodzPrzes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getKodRodzPrzes()
    {
        return isset($this->kodRodzPrzes) ? $this->kodRodzPrzes : null;
    }

    /**
     * Set kodRodzPrzes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $kodRodzPrzes
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setKodRodzPrzes($kodRodzPrzes = null)
    {
        // validation for constraint: string
        if (!is_null($kodRodzPrzes) && !is_string($kodRodzPrzes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodRodzPrzes, true), gettype($kodRodzPrzes)), __LINE__);
        }
        if (is_null($kodRodzPrzes) || (is_array($kodRodzPrzes) && empty($kodRodzPrzes))) {
            unset($this->kodRodzPrzes);
        } else {
            $this->kodRodzPrzes = $kodRodzPrzes;
        }

        return $this;
    }

    /**
     * Get krajNadania value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getKrajNadania()
    {
        return isset($this->krajNadania) ? $this->krajNadania : null;
    }

    /**
     * Set krajNadania value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $krajNadania
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setKrajNadania($krajNadania = null)
    {
        // validation for constraint: string
        if (!is_null($krajNadania) && !is_string($krajNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krajNadania, true), gettype($krajNadania)), __LINE__);
        }
        if (is_null($krajNadania) || (is_array($krajNadania) && empty($krajNadania))) {
            unset($this->krajNadania);
        } else {
            $this->krajNadania = $krajNadania;
        }

        return $this;
    }

    /**
     * Get krajPrzezn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getKrajPrzezn()
    {
        return isset($this->krajPrzezn) ? $this->krajPrzezn : null;
    }

    /**
     * Set krajPrzezn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $krajPrzezn
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setKrajPrzezn($krajPrzezn = null)
    {
        // validation for constraint: string
        if (!is_null($krajPrzezn) && !is_string($krajPrzezn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krajPrzezn, true), gettype($krajPrzezn)), __LINE__);
        }
        if (is_null($krajPrzezn) || (is_array($krajPrzezn) && empty($krajPrzezn))) {
            unset($this->krajPrzezn);
        } else {
            $this->krajPrzezn = $krajPrzezn;
        }

        return $this;
    }

    /**
     * Get masa value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return float|null
     */
    public function getMasa()
    {
        return isset($this->masa) ? $this->masa : null;
    }

    /**
     * Set masa value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param float $masa
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setMasa($masa = null)
    {
        // validation for constraint: float
        if (!is_null($masa) && !(is_float($masa) || is_numeric($masa))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        if (is_null($masa) || (is_array($masa) && empty($masa))) {
            unset($this->masa);
        } else {
            $this->masa = $masa;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
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
     * Get proceduraSerwis value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura|null
     */
    public function getProceduraSerwis()
    {
        return isset($this->proceduraSerwis) ? $this->proceduraSerwis : null;
    }

    /**
     * Set proceduraSerwis value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura $proceduraSerwis
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setProceduraSerwis(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Procedura $proceduraSerwis = null)
    {
        if (is_null($proceduraSerwis) || (is_array($proceduraSerwis) && empty($proceduraSerwis))) {
            unset($this->proceduraSerwis);
        } else {
            $this->proceduraSerwis = $proceduraSerwis;
        }

        return $this;
    }

    /**
     * Get rodzPrzes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRodzPrzes()
    {
        return isset($this->rodzPrzes) ? $this->rodzPrzes : null;
    }

    /**
     * Set rodzPrzes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $rodzPrzes
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setRodzPrzes($rodzPrzes = null)
    {
        // validation for constraint: string
        if (!is_null($rodzPrzes) && !is_string($rodzPrzes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rodzPrzes, true), gettype($rodzPrzes)), __LINE__);
        }
        if (is_null($rodzPrzes) || (is_array($rodzPrzes) && empty($rodzPrzes))) {
            unset($this->rodzPrzes);
        } else {
            $this->rodzPrzes = $rodzPrzes;
        }

        return $this;
    }

    /**
     * Get urzadNadania value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka|null
     */
    public function getUrzadNadania()
    {
        return isset($this->urzadNadania) ? $this->urzadNadania : null;
    }

    /**
     * Set urzadNadania value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $urzadNadania
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setUrzadNadania(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $urzadNadania = null)
    {
        if (is_null($urzadNadania) || (is_array($urzadNadania) && empty($urzadNadania))) {
            unset($this->urzadNadania);
        } else {
            $this->urzadNadania = $urzadNadania;
        }

        return $this;
    }

    /**
     * Get urzadPrzezn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka|null
     */
    public function getUrzadPrzezn()
    {
        return isset($this->urzadPrzezn) ? $this->urzadPrzezn : null;
    }

    /**
     * Set urzadPrzezn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $urzadPrzezn
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setUrzadPrzezn(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Jednostka $urzadPrzezn = null)
    {
        if (is_null($urzadPrzezn) || (is_array($urzadPrzezn) && empty($urzadPrzezn))) {
            unset($this->urzadPrzezn);
        } else {
            $this->urzadPrzezn = $urzadPrzezn;
        }

        return $this;
    }

    /**
     * Get zakonczonoObsluge value
     *
     * @return bool|null
     */
    public function getZakonczonoObsluge()
    {
        return $this->zakonczonoObsluge;
    }

    /**
     * Set zakonczonoObsluge value
     *
     * @param bool $zakonczonoObsluge
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setZakonczonoObsluge($zakonczonoObsluge = null)
    {
        // validation for constraint: boolean
        if (!is_null($zakonczonoObsluge) && !is_bool($zakonczonoObsluge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zakonczonoObsluge, true), gettype($zakonczonoObsluge)), __LINE__);
        }
        $this->zakonczonoObsluge = $zakonczonoObsluge;

        return $this;
    }

    /**
     * Get zdarzenia value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen|null
     */
    public function getZdarzenia()
    {
        return isset($this->zdarzenia) ? $this->zdarzenia : null;
    }

    /**
     * Set zdarzenia value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen $zdarzenia
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
     */
    public function setZdarzenia(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen $zdarzenia = null)
    {
        if (is_null($zdarzenia) || (is_array($zdarzenia) && empty($zdarzenia))) {
            unset($this->zdarzenia);
        } else {
            $this->zdarzenia = $zdarzenia;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\DanePrzesylki
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

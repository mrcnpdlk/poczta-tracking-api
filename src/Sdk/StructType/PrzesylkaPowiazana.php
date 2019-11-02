<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrzesylkaPowiazana StructType
 */
class PrzesylkaPowiazana extends AbstractStructBase
{
    /**
     * The nrPrzesylkiPowiazanej
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $nrPrzesylkiPowiazanej;

    /**
     * Constructor method for PrzesylkaPowiazana
     *
     * @uses PrzesylkaPowiazana::setNrPrzesylkiPowiazanej()
     *
     * @param string $nrPrzesylkiPowiazanej
     */
    public function __construct($nrPrzesylkiPowiazanej = null)
    {
        $this
            ->setNrPrzesylkiPowiazanej($nrPrzesylkiPowiazanej);
    }

    /**
     * Get nrPrzesylkiPowiazanej value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNrPrzesylkiPowiazanej()
    {
        return isset($this->nrPrzesylkiPowiazanej) ? $this->nrPrzesylkiPowiazanej : null;
    }

    /**
     * Set nrPrzesylkiPowiazanej value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $nrPrzesylkiPowiazanej
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana
     */
    public function setNrPrzesylkiPowiazanej($nrPrzesylkiPowiazanej = null)
    {
        // validation for constraint: string
        if (!is_null($nrPrzesylkiPowiazanej) && !is_string($nrPrzesylkiPowiazanej)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrPrzesylkiPowiazanej, true), gettype($nrPrzesylkiPowiazanej)), __LINE__);
        }
        if (is_null($nrPrzesylkiPowiazanej) || (is_array($nrPrzesylkiPowiazanej) && empty($nrPrzesylkiPowiazanej))) {
            unset($this->nrPrzesylkiPowiazanej);
        } else {
            $this->nrPrzesylkiPowiazanej = $nrPrzesylkiPowiazanej;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana
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

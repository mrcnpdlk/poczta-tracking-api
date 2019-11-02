<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GodzinyZUwagami StructType
 */
class GodzinyZUwagami extends AbstractStructBase
{
    /**
     * The godziny
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $godziny;
    /**
     * The uwagi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $uwagi;

    /**
     * Constructor method for GodzinyZUwagami
     *
     * @uses GodzinyZUwagami::setGodziny()
     * @uses GodzinyZUwagami::setUwagi()
     *
     * @param string $godziny
     * @param string $uwagi
     */
    public function __construct($godziny = null, $uwagi = null)
    {
        $this
            ->setGodziny($godziny)
            ->setUwagi($uwagi);
    }

    /**
     * Get godziny value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getGodziny()
    {
        return isset($this->godziny) ? $this->godziny : null;
    }

    /**
     * Set godziny value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $godziny
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami
     */
    public function setGodziny($godziny = null)
    {
        // validation for constraint: string
        if (!is_null($godziny) && !is_string($godziny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($godziny, true), gettype($godziny)), __LINE__);
        }
        if (is_null($godziny) || (is_array($godziny) && empty($godziny))) {
            unset($this->godziny);
        } else {
            $this->godziny = $godziny;
        }

        return $this;
    }

    /**
     * Get uwagi value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUwagi()
    {
        return isset($this->uwagi) ? $this->uwagi : null;
    }

    /**
     * Set uwagi value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $uwagi
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami
     */
    public function setUwagi($uwagi = null)
    {
        // validation for constraint: string
        if (!is_null($uwagi) && !is_string($uwagi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uwagi, true), gettype($uwagi)), __LINE__);
        }
        if (is_null($uwagi) || (is_array($uwagi) && empty($uwagi))) {
            unset($this->uwagi);
        } else {
            $this->uwagi = $uwagi;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami
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

<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sprawdzPrzesylkiOdDo StructType
 */
class SprawdzPrzesylkiOdDo extends AbstractStructBase
{
    /**
     * The numer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string[]
     */
    public $numer;
    /**
     * The odDnia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $odDnia;
    /**
     * The doDnia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string
     */
    public $doDnia;

    /**
     * Constructor method for sprawdzPrzesylkiOdDo
     *
     * @uses SprawdzPrzesylkiOdDo::setNumer()
     * @uses SprawdzPrzesylkiOdDo::setOdDnia()
     * @uses SprawdzPrzesylkiOdDo::setDoDnia()
     *
     * @param string[] $numer
     * @param string   $odDnia
     * @param string   $doDnia
     */
    public function __construct(array $numer = [], $odDnia = null, $doDnia = null)
    {
        $this
            ->setNumer($numer)
            ->setOdDnia($odDnia)
            ->setDoDnia($doDnia);
    }

    /**
     * Get numer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string[]|null
     */
    public function getNumer()
    {
        return isset($this->numer) ? $this->numer : null;
    }

    /**
     * This method is responsible for validating the values passed to the setNumer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNumer method
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNumerForArrayConstraintsFromSetNumer(array $values = [])
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $sprawdzPrzesylkiOdDoNumerItem) {
            // validation for constraint: itemType
            if (!is_string($sprawdzPrzesylkiOdDoNumerItem)) {
                $invalidValues[] = is_object($sprawdzPrzesylkiOdDoNumerItem) ? get_class($sprawdzPrzesylkiOdDoNumerItem) : sprintf('%s(%s)', gettype($sprawdzPrzesylkiOdDoNumerItem), var_export($sprawdzPrzesylkiOdDoNumerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The numer property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set numer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string[] $numer
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDo
     */
    public function setNumer(array $numer = [])
    {
        // validation for constraint: array
        if ('' !== ($numerArrayErrorMessage = self::validateNumerForArrayConstraintsFromSetNumer($numer))) {
            throw new \InvalidArgumentException($numerArrayErrorMessage, __LINE__);
        }
        if (is_null($numer) || (is_array($numer) && empty($numer))) {
            unset($this->numer);
        } else {
            $this->numer = $numer;
        }

        return $this;
    }

    /**
     * Add item to numer value
     *
     * @param string $item
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDo
     */
    public function addToNumer($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The numer property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->numer[] = $item;

        return $this;
    }

    /**
     * Get odDnia value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOdDnia()
    {
        return isset($this->odDnia) ? $this->odDnia : null;
    }

    /**
     * Set odDnia value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $odDnia
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDo
     */
    public function setOdDnia($odDnia = null)
    {
        // validation for constraint: string
        if (!is_null($odDnia) && !is_string($odDnia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($odDnia, true), gettype($odDnia)), __LINE__);
        }
        if (is_null($odDnia) || (is_array($odDnia) && empty($odDnia))) {
            unset($this->odDnia);
        } else {
            $this->odDnia = $odDnia;
        }

        return $this;
    }

    /**
     * Get doDnia value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDoDnia()
    {
        return isset($this->doDnia) ? $this->doDnia : null;
    }

    /**
     * Set doDnia value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $doDnia
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDo
     */
    public function setDoDnia($doDnia = null)
    {
        // validation for constraint: string
        if (!is_null($doDnia) && !is_string($doDnia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doDnia, true), gettype($doDnia)), __LINE__);
        }
        if (is_null($doDnia) || (is_array($doDnia) && empty($doDnia))) {
            unset($this->doDnia);
        } else {
            $this->doDnia = $doDnia;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiOdDo
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

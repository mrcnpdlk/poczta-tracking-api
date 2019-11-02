<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sprawdzPrzesylkiPl StructType
 */
class SprawdzPrzesylkiPl extends AbstractStructBase
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
     * Constructor method for sprawdzPrzesylkiPl
     *
     * @uses SprawdzPrzesylkiPl::setNumer()
     *
     * @param string[] $numer
     */
    public function __construct(array $numer = [])
    {
        $this
            ->setNumer($numer);
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
        foreach ($values as $sprawdzPrzesylkiPlNumerItem) {
            // validation for constraint: itemType
            if (!is_string($sprawdzPrzesylkiPlNumerItem)) {
                $invalidValues[] = is_object($sprawdzPrzesylkiPlNumerItem) ? get_class($sprawdzPrzesylkiPlNumerItem) : sprintf('%s(%s)', gettype($sprawdzPrzesylkiPlNumerItem), var_export($sprawdzPrzesylkiPlNumerItem, true));
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPl
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPl
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see AbstractStructBase::__set_state()
     *
     * @uses AbstractStructBase::__set_state()
     *
     * @param array $array the exported values
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPl
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

<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListaPrzesylek StructType
 */
class ListaPrzesylek extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka[]
     */
    public $przesylka;

    /**
     * Constructor method for ListaPrzesylek
     *
     * @uses ListaPrzesylek::setPrzesylka()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka[] $przesylka
     */
    public function __construct(array $przesylka = [])
    {
        $this
            ->setPrzesylka($przesylka);
    }

    /**
     * Get przesylka value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka[]|null
     */
    public function getPrzesylka()
    {
        return isset($this->przesylka) ? $this->przesylka : null;
    }

    /**
     * This method is responsible for validating the values passed to the setPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylka method
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaForArrayConstraintsFromSetPrzesylka(array $values = [])
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $listaPrzesylekPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$listaPrzesylekPrzesylkaItem instanceof \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka) {
                $invalidValues[] = is_object($listaPrzesylekPrzesylkaItem) ? get_class($listaPrzesylekPrzesylkaItem) : sprintf('%s(%s)', gettype($listaPrzesylekPrzesylkaItem), var_export($listaPrzesylekPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set przesylka value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka[] $przesylka
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek
     */
    public function setPrzesylka(array $przesylka = [])
    {
        // validation for constraint: array
        if ('' !== ($przesylkaArrayErrorMessage = self::validatePrzesylkaForArrayConstraintsFromSetPrzesylka($przesylka))) {
            throw new \InvalidArgumentException($przesylkaArrayErrorMessage, __LINE__);
        }
        if (is_null($przesylka) || (is_array($przesylka) && empty($przesylka))) {
            unset($this->przesylka);
        } else {
            $this->przesylka = $przesylka;
        }

        return $this;
    }

    /**
     * Add item to przesylka value
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka $item
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek
     */
    public function addToPrzesylka(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka) {
            throw new \InvalidArgumentException(sprintf('The przesylka property can only contain items of type \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylek
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

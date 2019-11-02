<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListaPrzesylekPowiazanych StructType
 */
class ListaPrzesylekPowiazanych extends AbstractStructBase
{
    /**
     * The przesylkaPowiazana
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana[]
     */
    public $przesylkaPowiazana;

    /**
     * Constructor method for ListaPrzesylekPowiazanych
     *
     * @uses ListaPrzesylekPowiazanych::setPrzesylkaPowiazana()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana[] $przesylkaPowiazana
     */
    public function __construct(array $przesylkaPowiazana = [])
    {
        $this
            ->setPrzesylkaPowiazana($przesylkaPowiazana);
    }

    /**
     * Get przesylkaPowiazana value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana[]|null
     */
    public function getPrzesylkaPowiazana()
    {
        return isset($this->przesylkaPowiazana) ? $this->przesylkaPowiazana : null;
    }

    /**
     * This method is responsible for validating the values passed to the setPrzesylkaPowiazana method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylkaPowiazana method
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaPowiazanaForArrayConstraintsFromSetPrzesylkaPowiazana(array $values = [])
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $listaPrzesylekPowiazanychPrzesylkaPowiazanaItem) {
            // validation for constraint: itemType
            if (!$listaPrzesylekPowiazanychPrzesylkaPowiazanaItem instanceof \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana) {
                $invalidValues[] = is_object($listaPrzesylekPowiazanychPrzesylkaPowiazanaItem) ? get_class($listaPrzesylekPowiazanychPrzesylkaPowiazanaItem) : sprintf('%s(%s)', gettype($listaPrzesylekPowiazanychPrzesylkaPowiazanaItem), var_export($listaPrzesylekPowiazanychPrzesylkaPowiazanaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylkaPowiazana property can only contain items of type \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set przesylkaPowiazana value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana[] $przesylkaPowiazana
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych
     */
    public function setPrzesylkaPowiazana(array $przesylkaPowiazana = [])
    {
        // validation for constraint: array
        if ('' !== ($przesylkaPowiazanaArrayErrorMessage = self::validatePrzesylkaPowiazanaForArrayConstraintsFromSetPrzesylkaPowiazana($przesylkaPowiazana))) {
            throw new \InvalidArgumentException($przesylkaPowiazanaArrayErrorMessage, __LINE__);
        }
        if (is_null($przesylkaPowiazana) || (is_array($przesylkaPowiazana) && empty($przesylkaPowiazana))) {
            unset($this->przesylkaPowiazana);
        } else {
            $this->przesylkaPowiazana = $przesylkaPowiazana;
        }

        return $this;
    }

    /**
     * Add item to przesylkaPowiazana value
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana $item
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych
     */
    public function addToPrzesylkaPowiazana(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana) {
            throw new \InvalidArgumentException(sprintf('The przesylkaPowiazana property can only contain items of type \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\PrzesylkaPowiazana, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylkaPowiazana[] = $item;

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaPrzesylekPowiazanych
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

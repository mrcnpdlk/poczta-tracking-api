<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListaZdarzen StructType
 */
class ListaZdarzen extends AbstractStructBase
{
    /**
     * The zdarzenie
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie[]
     */
    public $zdarzenie;

    /**
     * Constructor method for ListaZdarzen
     *
     * @uses ListaZdarzen::setZdarzenie()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie[] $zdarzenie
     */
    public function __construct(array $zdarzenie = [])
    {
        $this
            ->setZdarzenie($zdarzenie);
    }

    /**
     * Get zdarzenie value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie[]|null
     */
    public function getZdarzenie()
    {
        return isset($this->zdarzenie) ? $this->zdarzenie : null;
    }

    /**
     * This method is responsible for validating the values passed to the setZdarzenie method
     * This method is willingly generated in order to preserve the one-line inline validation within the setZdarzenie method
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateZdarzenieForArrayConstraintsFromSetZdarzenie(array $values = [])
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $listaZdarzenZdarzenieItem) {
            // validation for constraint: itemType
            if (!$listaZdarzenZdarzenieItem instanceof \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie) {
                $invalidValues[] = is_object($listaZdarzenZdarzenieItem) ? get_class($listaZdarzenZdarzenieItem) : sprintf('%s(%s)', gettype($listaZdarzenZdarzenieItem), var_export($listaZdarzenZdarzenieItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The zdarzenie property can only contain items of type \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set zdarzenie value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie[] $zdarzenie
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen
     */
    public function setZdarzenie(array $zdarzenie = [])
    {
        // validation for constraint: array
        if ('' !== ($zdarzenieArrayErrorMessage = self::validateZdarzenieForArrayConstraintsFromSetZdarzenie($zdarzenie))) {
            throw new \InvalidArgumentException($zdarzenieArrayErrorMessage, __LINE__);
        }
        if (is_null($zdarzenie) || (is_array($zdarzenie) && empty($zdarzenie))) {
            unset($this->zdarzenie);
        } else {
            $this->zdarzenie = $zdarzenie;
        }

        return $this;
    }

    /**
     * Add item to zdarzenie value
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie $item
     *
     * @throws \InvalidArgumentException
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen
     */
    public function addToZdarzenie(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie) {
            throw new \InvalidArgumentException(sprintf('The zdarzenie property can only contain items of type \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Zdarzenie, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->zdarzenie[] = $item;

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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\ListaZdarzen
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

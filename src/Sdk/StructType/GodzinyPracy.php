<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GodzinyPracy StructType
 */
class GodzinyPracy extends AbstractStructBase
{
    /**
     * The dniRobocze
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami
     */
    public $dniRobocze;
    /**
     * The niedzISw
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami
     */
    public $niedzISw;
    /**
     * The soboty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami
     */
    public $soboty;

    /**
     * Constructor method for GodzinyPracy
     *
     * @uses GodzinyPracy::setDniRobocze()
     * @uses GodzinyPracy::setNiedzISw()
     * @uses GodzinyPracy::setSoboty()
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $dniRobocze
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $niedzISw
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $soboty
     */
    public function __construct(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $dniRobocze = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $niedzISw = null, \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $soboty = null)
    {
        $this
            ->setDniRobocze($dniRobocze)
            ->setNiedzISw($niedzISw)
            ->setSoboty($soboty);
    }

    /**
     * Get dniRobocze value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami|null
     */
    public function getDniRobocze()
    {
        return isset($this->dniRobocze) ? $this->dniRobocze : null;
    }

    /**
     * Set dniRobocze value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $dniRobocze
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy
     */
    public function setDniRobocze(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $dniRobocze = null)
    {
        if (is_null($dniRobocze) || (is_array($dniRobocze) && empty($dniRobocze))) {
            unset($this->dniRobocze);
        } else {
            $this->dniRobocze = $dniRobocze;
        }

        return $this;
    }

    /**
     * Get niedzISw value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami|null
     */
    public function getNiedzISw()
    {
        return isset($this->niedzISw) ? $this->niedzISw : null;
    }

    /**
     * Set niedzISw value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $niedzISw
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy
     */
    public function setNiedzISw(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $niedzISw = null)
    {
        if (is_null($niedzISw) || (is_array($niedzISw) && empty($niedzISw))) {
            unset($this->niedzISw);
        } else {
            $this->niedzISw = $niedzISw;
        }

        return $this;
    }

    /**
     * Get soboty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami|null
     */
    public function getSoboty()
    {
        return isset($this->soboty) ? $this->soboty : null;
    }

    /**
     * Set soboty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $soboty
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy
     */
    public function setSoboty(\Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyZUwagami $soboty = null)
    {
        if (is_null($soboty) || (is_array($soboty) && empty($soboty))) {
            unset($this->soboty);
        } else {
            $this->soboty = $soboty;
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
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\GodzinyPracy
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

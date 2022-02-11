<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickupResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:planPickupResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PlanPickupResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\PlanPickupResponseType|null
     */
    protected ?\ColissimoPostage\StructType\PlanPickupResponseType $return = null;
    /**
     * Constructor method for planPickupResponse
     * @uses PlanPickupResponse::setReturn()
     * @param \ColissimoPostage\StructType\PlanPickupResponseType $return
     */
    public function __construct(?\ColissimoPostage\StructType\PlanPickupResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\PlanPickupResponseType|null
     */
    public function getReturn(): ?\ColissimoPostage\StructType\PlanPickupResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\PlanPickupResponseType $return
     * @return \ColissimoPostage\StructType\PlanPickupResponse
     */
    public function setReturn(?\ColissimoPostage\StructType\PlanPickupResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDatesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getListMailBoxPickingDatesResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDatesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType|null
     */
    protected ?\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return = null;
    /**
     * Constructor method for getListMailBoxPickingDatesResponse
     * @uses GetListMailBoxPickingDatesResponse::setReturn()
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return
     */
    public function __construct(?\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType|null
     */
    public function getReturn(): ?\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponse
     */
    public function setReturn(?\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

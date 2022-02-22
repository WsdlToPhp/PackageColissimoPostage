<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDates StructType
 * Meta information extracted from the WSDL
 * - type: tns:getListMailBoxPickingDates
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDates extends AbstractStructBase
{
    /**
     * The getListMailBoxPickingDatesRetourRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest|null
     */
    protected ?\ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null;
    /**
     * Constructor method for getListMailBoxPickingDates
     * @uses GetListMailBoxPickingDates::setGetListMailBoxPickingDatesRetourRequest()
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     */
    public function __construct(?\ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null)
    {
        $this
            ->setGetListMailBoxPickingDatesRetourRequest($getListMailBoxPickingDatesRetourRequest);
    }
    /**
     * Get getListMailBoxPickingDatesRetourRequest value
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest|null
     */
    public function getGetListMailBoxPickingDatesRetourRequest(): ?\ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest
    {
        return $this->getListMailBoxPickingDatesRetourRequest;
    }
    /**
     * Set getListMailBoxPickingDatesRetourRequest value
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDates
     */
    public function setGetListMailBoxPickingDatesRetourRequest(?\ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null): self
    {
        $this->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;
        
        return $this;
    }
}

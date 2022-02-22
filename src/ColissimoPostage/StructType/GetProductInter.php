<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInter StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProductInter
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetProductInter extends AbstractStructBase
{
    /**
     * The getProductInterRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GetProductInterRequest|null
     */
    protected ?\ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest = null;
    /**
     * Constructor method for getProductInter
     * @uses GetProductInter::setGetProductInterRequest()
     * @param \ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest
     */
    public function __construct(?\ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest = null)
    {
        $this
            ->setGetProductInterRequest($getProductInterRequest);
    }
    /**
     * Get getProductInterRequest value
     * @return \ColissimoPostage\StructType\GetProductInterRequest|null
     */
    public function getGetProductInterRequest(): ?\ColissimoPostage\StructType\GetProductInterRequest
    {
        return $this->getProductInterRequest;
    }
    /**
     * Set getProductInterRequest value
     * @param \ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest
     * @return \ColissimoPostage\StructType\GetProductInter
     */
    public function setGetProductInterRequest(?\ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest = null): self
    {
        $this->getProductInterRequest = $getProductInterRequest;
        
        return $this;
    }
}

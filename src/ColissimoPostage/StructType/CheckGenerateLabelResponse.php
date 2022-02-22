<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:checkGenerateLabelResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CheckGenerateLabelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CheckGenerateLabelResponseType|null
     */
    protected ?\ColissimoPostage\StructType\CheckGenerateLabelResponseType $return = null;
    /**
     * Constructor method for checkGenerateLabelResponse
     * @uses CheckGenerateLabelResponse::setReturn()
     * @param \ColissimoPostage\StructType\CheckGenerateLabelResponseType $return
     */
    public function __construct(?\ColissimoPostage\StructType\CheckGenerateLabelResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\CheckGenerateLabelResponseType|null
     */
    public function getReturn(): ?\ColissimoPostage\StructType\CheckGenerateLabelResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\CheckGenerateLabelResponseType $return
     * @return \ColissimoPostage\StructType\CheckGenerateLabelResponse
     */
    public function setReturn(?\ColissimoPostage\StructType\CheckGenerateLabelResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

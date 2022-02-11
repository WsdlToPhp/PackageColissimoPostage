<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBordereauByNumberResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBordereauByNumberResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBordereauByNumberResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\BordereauResponse|null
     */
    protected ?\ColissimoPostage\StructType\BordereauResponse $return = null;
    /**
     * Constructor method for getBordereauByNumberResponse
     * @uses GetBordereauByNumberResponse::setReturn()
     * @param \ColissimoPostage\StructType\BordereauResponse $return
     */
    public function __construct(?\ColissimoPostage\StructType\BordereauResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\BordereauResponse|null
     */
    public function getReturn(): ?\ColissimoPostage\StructType\BordereauResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\BordereauResponse $return
     * @return \ColissimoPostage\StructType\GetBordereauByNumberResponse
     */
    public function setReturn(?\ColissimoPostage\StructType\BordereauResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

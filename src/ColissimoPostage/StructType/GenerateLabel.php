<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabel StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateLabel
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateLabel extends AbstractStructBase
{
    /**
     * The generateLabelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GenerateLabelRequest|null
     */
    protected ?\ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest = null;
    /**
     * Constructor method for generateLabel
     * @uses GenerateLabel::setGenerateLabelRequest()
     * @param \ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest
     */
    public function __construct(?\ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest = null)
    {
        $this
            ->setGenerateLabelRequest($generateLabelRequest);
    }
    /**
     * Get generateLabelRequest value
     * @return \ColissimoPostage\StructType\GenerateLabelRequest|null
     */
    public function getGenerateLabelRequest(): ?\ColissimoPostage\StructType\GenerateLabelRequest
    {
        return $this->generateLabelRequest;
    }
    /**
     * Set generateLabelRequest value
     * @param \ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest
     * @return \ColissimoPostage\StructType\GenerateLabel
     */
    public function setGenerateLabelRequest(?\ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest = null): self
    {
        $this->generateLabelRequest = $generateLabelRequest;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateLabelResponseType extends BaseResponse
{
    /**
     * The labelXmlReponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\XmlResponse|null
     */
    protected ?\ColissimoPostage\StructType\XmlResponse $labelXmlReponse = null;
    /**
     * The labelResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\LabelResponse|null
     */
    protected ?\ColissimoPostage\StructType\LabelResponse $labelResponse = null;
    /**
     * Constructor method for GenerateLabelResponseType
     * @uses GenerateLabelResponseType::setLabelXmlReponse()
     * @uses GenerateLabelResponseType::setLabelResponse()
     * @param \ColissimoPostage\StructType\XmlResponse $labelXmlReponse
     * @param \ColissimoPostage\StructType\LabelResponse $labelResponse
     */
    public function __construct(?\ColissimoPostage\StructType\XmlResponse $labelXmlReponse = null, ?\ColissimoPostage\StructType\LabelResponse $labelResponse = null)
    {
        $this
            ->setLabelXmlReponse($labelXmlReponse)
            ->setLabelResponse($labelResponse);
    }
    /**
     * Get labelXmlReponse value
     * @return \ColissimoPostage\StructType\XmlResponse|null
     */
    public function getLabelXmlReponse(): ?\ColissimoPostage\StructType\XmlResponse
    {
        return $this->labelXmlReponse;
    }
    /**
     * Set labelXmlReponse value
     * @param \ColissimoPostage\StructType\XmlResponse $labelXmlReponse
     * @return \ColissimoPostage\StructType\GenerateLabelResponseType
     */
    public function setLabelXmlReponse(?\ColissimoPostage\StructType\XmlResponse $labelXmlReponse = null): self
    {
        $this->labelXmlReponse = $labelXmlReponse;
        
        return $this;
    }
    /**
     * Get labelResponse value
     * @return \ColissimoPostage\StructType\LabelResponse|null
     */
    public function getLabelResponse(): ?\ColissimoPostage\StructType\LabelResponse
    {
        return $this->labelResponse;
    }
    /**
     * Set labelResponse value
     * @param \ColissimoPostage\StructType\LabelResponse $labelResponse
     * @return \ColissimoPostage\StructType\GenerateLabelResponseType
     */
    public function setLabelResponse(?\ColissimoPostage\StructType\LabelResponse $labelResponse = null): self
    {
        $this->labelResponse = $labelResponse;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LabelResponse extends AbstractStructBase
{
    /**
     * The label
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * The cn23
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cn23 = null;
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parcelNumber = null;
    /**
     * The parcelNumberPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parcelNumberPartner = null;
    /**
     * The pdfUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pdfUrl = null;
    /**
     * Constructor method for labelResponse
     * @uses LabelResponse::setLabel()
     * @uses LabelResponse::setCn23()
     * @uses LabelResponse::setParcelNumber()
     * @uses LabelResponse::setParcelNumberPartner()
     * @uses LabelResponse::setPdfUrl()
     * @param string $label
     * @param string $cn23
     * @param string $parcelNumber
     * @param string $parcelNumberPartner
     * @param string $pdfUrl
     */
    public function __construct(?string $label = null, ?string $cn23 = null, ?string $parcelNumber = null, ?string $parcelNumberPartner = null, ?string $pdfUrl = null)
    {
        $this
            ->setLabel($label)
            ->setCn23($cn23)
            ->setParcelNumber($parcelNumber)
            ->setParcelNumberPartner($parcelNumberPartner)
            ->setPdfUrl($pdfUrl);
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        
        return $this;
    }
    /**
     * Get cn23 value
     * @return string|null
     */
    public function getCn23(): ?string
    {
        return $this->cn23;
    }
    /**
     * Set cn23 value
     * @param string $cn23
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setCn23(?string $cn23 = null): self
    {
        // validation for constraint: string
        if (!is_null($cn23) && !is_string($cn23)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cn23, true), gettype($cn23)), __LINE__);
        }
        $this->cn23 = $cn23;
        
        return $this;
    }
    /**
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber(): ?string
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setParcelNumber(?string $parcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        
        return $this;
    }
    /**
     * Get parcelNumberPartner value
     * @return string|null
     */
    public function getParcelNumberPartner(): ?string
    {
        return $this->parcelNumberPartner;
    }
    /**
     * Set parcelNumberPartner value
     * @param string $parcelNumberPartner
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setParcelNumberPartner(?string $parcelNumberPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumberPartner) && !is_string($parcelNumberPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumberPartner, true), gettype($parcelNumberPartner)), __LINE__);
        }
        $this->parcelNumberPartner = $parcelNumberPartner;
        
        return $this;
    }
    /**
     * Get pdfUrl value
     * @return string|null
     */
    public function getPdfUrl(): ?string
    {
        return $this->pdfUrl;
    }
    /**
     * Set pdfUrl value
     * @param string $pdfUrl
     * @return \ColissimoPostage\StructType\LabelResponse
     */
    public function setPdfUrl(?string $pdfUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($pdfUrl) && !is_string($pdfUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfUrl, true), gettype($pdfUrl)), __LINE__);
        }
        $this->pdfUrl = $pdfUrl;
        
        return $this;
    }
}

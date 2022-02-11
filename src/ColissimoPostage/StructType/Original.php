<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for original StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Original extends AbstractStructBase
{
    /**
     * The originalIdent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originalIdent = null;
    /**
     * The originalInvoiceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originalInvoiceNumber = null;
    /**
     * The originalInvoiceDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originalInvoiceDate = null;
    /**
     * The originalParcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originalParcelNumber = null;
    /**
     * Constructor method for original
     * @uses Original::setOriginalIdent()
     * @uses Original::setOriginalInvoiceNumber()
     * @uses Original::setOriginalInvoiceDate()
     * @uses Original::setOriginalParcelNumber()
     * @param string $originalIdent
     * @param string $originalInvoiceNumber
     * @param string $originalInvoiceDate
     * @param string $originalParcelNumber
     */
    public function __construct(?string $originalIdent = null, ?string $originalInvoiceNumber = null, ?string $originalInvoiceDate = null, ?string $originalParcelNumber = null)
    {
        $this
            ->setOriginalIdent($originalIdent)
            ->setOriginalInvoiceNumber($originalInvoiceNumber)
            ->setOriginalInvoiceDate($originalInvoiceDate)
            ->setOriginalParcelNumber($originalParcelNumber);
    }
    /**
     * Get originalIdent value
     * @return string|null
     */
    public function getOriginalIdent(): ?string
    {
        return $this->originalIdent;
    }
    /**
     * Set originalIdent value
     * @param string $originalIdent
     * @return \ColissimoPostage\StructType\Original
     */
    public function setOriginalIdent(?string $originalIdent = null): self
    {
        // validation for constraint: string
        if (!is_null($originalIdent) && !is_string($originalIdent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalIdent, true), gettype($originalIdent)), __LINE__);
        }
        $this->originalIdent = $originalIdent;
        
        return $this;
    }
    /**
     * Get originalInvoiceNumber value
     * @return string|null
     */
    public function getOriginalInvoiceNumber(): ?string
    {
        return $this->originalInvoiceNumber;
    }
    /**
     * Set originalInvoiceNumber value
     * @param string $originalInvoiceNumber
     * @return \ColissimoPostage\StructType\Original
     */
    public function setOriginalInvoiceNumber(?string $originalInvoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($originalInvoiceNumber) && !is_string($originalInvoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalInvoiceNumber, true), gettype($originalInvoiceNumber)), __LINE__);
        }
        $this->originalInvoiceNumber = $originalInvoiceNumber;
        
        return $this;
    }
    /**
     * Get originalInvoiceDate value
     * @return string|null
     */
    public function getOriginalInvoiceDate(): ?string
    {
        return $this->originalInvoiceDate;
    }
    /**
     * Set originalInvoiceDate value
     * @param string $originalInvoiceDate
     * @return \ColissimoPostage\StructType\Original
     */
    public function setOriginalInvoiceDate(?string $originalInvoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($originalInvoiceDate) && !is_string($originalInvoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalInvoiceDate, true), gettype($originalInvoiceDate)), __LINE__);
        }
        $this->originalInvoiceDate = $originalInvoiceDate;
        
        return $this;
    }
    /**
     * Get originalParcelNumber value
     * @return string|null
     */
    public function getOriginalParcelNumber(): ?string
    {
        return $this->originalParcelNumber;
    }
    /**
     * Set originalParcelNumber value
     * @param string $originalParcelNumber
     * @return \ColissimoPostage\StructType\Original
     */
    public function setOriginalParcelNumber(?string $originalParcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($originalParcelNumber) && !is_string($originalParcelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalParcelNumber, true), gettype($originalParcelNumber)), __LINE__);
        }
        $this->originalParcelNumber = $originalParcelNumber;
        
        return $this;
    }
}

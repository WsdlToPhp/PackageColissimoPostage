<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customsDeclarations StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CustomsDeclarations extends AbstractStructBase
{
    /**
     * The includeCustomsDeclarations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeCustomsDeclarations = null;
    /**
     * The contents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Contents|null
     */
    protected ?\ColissimoPostage\StructType\Contents $contents = null;
    /**
     * The importersReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $importersReference = null;
    /**
     * The importersContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $importersContact = null;
    /**
     * The officeOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $officeOrigin = null;
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The invoiceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoiceNumber = null;
    /**
     * The licenceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $licenceNumber = null;
    /**
     * The certificatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $certificatNumber = null;
    /**
     * The importerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ImporterAddress|null
     */
    protected ?\ColissimoPostage\StructType\ImporterAddress $importerAddress = null;
    /**
     * Constructor method for customsDeclarations
     * @uses CustomsDeclarations::setIncludeCustomsDeclarations()
     * @uses CustomsDeclarations::setContents()
     * @uses CustomsDeclarations::setImportersReference()
     * @uses CustomsDeclarations::setImportersContact()
     * @uses CustomsDeclarations::setOfficeOrigin()
     * @uses CustomsDeclarations::setComments()
     * @uses CustomsDeclarations::setDescription()
     * @uses CustomsDeclarations::setInvoiceNumber()
     * @uses CustomsDeclarations::setLicenceNumber()
     * @uses CustomsDeclarations::setCertificatNumber()
     * @uses CustomsDeclarations::setImporterAddress()
     * @param bool $includeCustomsDeclarations
     * @param \ColissimoPostage\StructType\Contents $contents
     * @param string $importersReference
     * @param string $importersContact
     * @param string $officeOrigin
     * @param string $comments
     * @param string $description
     * @param string $invoiceNumber
     * @param string $licenceNumber
     * @param string $certificatNumber
     * @param \ColissimoPostage\StructType\ImporterAddress $importerAddress
     */
    public function __construct(?bool $includeCustomsDeclarations = null, ?\ColissimoPostage\StructType\Contents $contents = null, ?string $importersReference = null, ?string $importersContact = null, ?string $officeOrigin = null, ?string $comments = null, ?string $description = null, ?string $invoiceNumber = null, ?string $licenceNumber = null, ?string $certificatNumber = null, ?\ColissimoPostage\StructType\ImporterAddress $importerAddress = null)
    {
        $this
            ->setIncludeCustomsDeclarations($includeCustomsDeclarations)
            ->setContents($contents)
            ->setImportersReference($importersReference)
            ->setImportersContact($importersContact)
            ->setOfficeOrigin($officeOrigin)
            ->setComments($comments)
            ->setDescription($description)
            ->setInvoiceNumber($invoiceNumber)
            ->setLicenceNumber($licenceNumber)
            ->setCertificatNumber($certificatNumber)
            ->setImporterAddress($importerAddress);
    }
    /**
     * Get includeCustomsDeclarations value
     * @return bool|null
     */
    public function getIncludeCustomsDeclarations(): ?bool
    {
        return $this->includeCustomsDeclarations;
    }
    /**
     * Set includeCustomsDeclarations value
     * @param bool $includeCustomsDeclarations
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setIncludeCustomsDeclarations(?bool $includeCustomsDeclarations = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeCustomsDeclarations) && !is_bool($includeCustomsDeclarations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCustomsDeclarations, true), gettype($includeCustomsDeclarations)), __LINE__);
        }
        $this->includeCustomsDeclarations = $includeCustomsDeclarations;
        
        return $this;
    }
    /**
     * Get contents value
     * @return \ColissimoPostage\StructType\Contents|null
     */
    public function getContents(): ?\ColissimoPostage\StructType\Contents
    {
        return $this->contents;
    }
    /**
     * Set contents value
     * @param \ColissimoPostage\StructType\Contents $contents
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setContents(?\ColissimoPostage\StructType\Contents $contents = null): self
    {
        $this->contents = $contents;
        
        return $this;
    }
    /**
     * Get importersReference value
     * @return string|null
     */
    public function getImportersReference(): ?string
    {
        return $this->importersReference;
    }
    /**
     * Set importersReference value
     * @param string $importersReference
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setImportersReference(?string $importersReference = null): self
    {
        // validation for constraint: string
        if (!is_null($importersReference) && !is_string($importersReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importersReference, true), gettype($importersReference)), __LINE__);
        }
        $this->importersReference = $importersReference;
        
        return $this;
    }
    /**
     * Get importersContact value
     * @return string|null
     */
    public function getImportersContact(): ?string
    {
        return $this->importersContact;
    }
    /**
     * Set importersContact value
     * @param string $importersContact
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setImportersContact(?string $importersContact = null): self
    {
        // validation for constraint: string
        if (!is_null($importersContact) && !is_string($importersContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importersContact, true), gettype($importersContact)), __LINE__);
        }
        $this->importersContact = $importersContact;
        
        return $this;
    }
    /**
     * Get officeOrigin value
     * @return string|null
     */
    public function getOfficeOrigin(): ?string
    {
        return $this->officeOrigin;
    }
    /**
     * Set officeOrigin value
     * @param string $officeOrigin
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setOfficeOrigin(?string $officeOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($officeOrigin) && !is_string($officeOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeOrigin, true), gettype($officeOrigin)), __LINE__);
        }
        $this->officeOrigin = $officeOrigin;
        
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get invoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * Set invoiceNumber value
     * @param string $invoiceNumber
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setInvoiceNumber(?string $invoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->invoiceNumber = $invoiceNumber;
        
        return $this;
    }
    /**
     * Get licenceNumber value
     * @return string|null
     */
    public function getLicenceNumber(): ?string
    {
        return $this->licenceNumber;
    }
    /**
     * Set licenceNumber value
     * @param string $licenceNumber
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setLicenceNumber(?string $licenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($licenceNumber) && !is_string($licenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licenceNumber, true), gettype($licenceNumber)), __LINE__);
        }
        $this->licenceNumber = $licenceNumber;
        
        return $this;
    }
    /**
     * Get certificatNumber value
     * @return string|null
     */
    public function getCertificatNumber(): ?string
    {
        return $this->certificatNumber;
    }
    /**
     * Set certificatNumber value
     * @param string $certificatNumber
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setCertificatNumber(?string $certificatNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($certificatNumber) && !is_string($certificatNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificatNumber, true), gettype($certificatNumber)), __LINE__);
        }
        $this->certificatNumber = $certificatNumber;
        
        return $this;
    }
    /**
     * Get importerAddress value
     * @return \ColissimoPostage\StructType\ImporterAddress|null
     */
    public function getImporterAddress(): ?\ColissimoPostage\StructType\ImporterAddress
    {
        return $this->importerAddress;
    }
    /**
     * Set importerAddress value
     * @param \ColissimoPostage\StructType\ImporterAddress $importerAddress
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setImporterAddress(?\ColissimoPostage\StructType\ImporterAddress $importerAddress = null): self
    {
        $this->importerAddress = $importerAddress;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereauHeader StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BordereauHeader extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The bordereauNumber
     * @var int|null
     */
    protected ?int $bordereauNumber = null;
    /**
     * The clientNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $clientNumber = null;
    /**
     * The codeSitePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $codeSitePCH = null;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $company = null;
    /**
     * The nameSitePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nameSitePCH = null;
    /**
     * The numberOfParcels
     * @var int|null
     */
    protected ?int $numberOfParcels = null;
    /**
     * The publishingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $publishingDate = null;
    /**
     * Constructor method for bordereauHeader
     * @uses BordereauHeader::setAddress()
     * @uses BordereauHeader::setBordereauNumber()
     * @uses BordereauHeader::setClientNumber()
     * @uses BordereauHeader::setCodeSitePCH()
     * @uses BordereauHeader::setCompany()
     * @uses BordereauHeader::setNameSitePCH()
     * @uses BordereauHeader::setNumberOfParcels()
     * @uses BordereauHeader::setPublishingDate()
     * @param string $address
     * @param int $bordereauNumber
     * @param string $clientNumber
     * @param int $codeSitePCH
     * @param string $company
     * @param string $nameSitePCH
     * @param int $numberOfParcels
     * @param string $publishingDate
     */
    public function __construct(?string $address = null, ?int $bordereauNumber = null, ?string $clientNumber = null, ?int $codeSitePCH = null, ?string $company = null, ?string $nameSitePCH = null, ?int $numberOfParcels = null, ?string $publishingDate = null)
    {
        $this
            ->setAddress($address)
            ->setBordereauNumber($bordereauNumber)
            ->setClientNumber($clientNumber)
            ->setCodeSitePCH($codeSitePCH)
            ->setCompany($company)
            ->setNameSitePCH($nameSitePCH)
            ->setNumberOfParcels($numberOfParcels)
            ->setPublishingDate($publishingDate);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get bordereauNumber value
     * @return int|null
     */
    public function getBordereauNumber(): ?int
    {
        return $this->bordereauNumber;
    }
    /**
     * Set bordereauNumber value
     * @param int $bordereauNumber
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setBordereauNumber(?int $bordereauNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($bordereauNumber) && !(is_int($bordereauNumber) || ctype_digit($bordereauNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bordereauNumber, true), gettype($bordereauNumber)), __LINE__);
        }
        $this->bordereauNumber = $bordereauNumber;
        
        return $this;
    }
    /**
     * Get clientNumber value
     * @return string|null
     */
    public function getClientNumber(): ?string
    {
        return $this->clientNumber;
    }
    /**
     * Set clientNumber value
     * @param string $clientNumber
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setClientNumber(?string $clientNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($clientNumber) && !is_string($clientNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientNumber, true), gettype($clientNumber)), __LINE__);
        }
        $this->clientNumber = $clientNumber;
        
        return $this;
    }
    /**
     * Get codeSitePCH value
     * @return int|null
     */
    public function getCodeSitePCH(): ?int
    {
        return $this->codeSitePCH;
    }
    /**
     * Set codeSitePCH value
     * @param int $codeSitePCH
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setCodeSitePCH(?int $codeSitePCH = null): self
    {
        // validation for constraint: int
        if (!is_null($codeSitePCH) && !(is_int($codeSitePCH) || ctype_digit($codeSitePCH))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeSitePCH, true), gettype($codeSitePCH)), __LINE__);
        }
        $this->codeSitePCH = $codeSitePCH;
        
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        
        return $this;
    }
    /**
     * Get nameSitePCH value
     * @return string|null
     */
    public function getNameSitePCH(): ?string
    {
        return $this->nameSitePCH;
    }
    /**
     * Set nameSitePCH value
     * @param string $nameSitePCH
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setNameSitePCH(?string $nameSitePCH = null): self
    {
        // validation for constraint: string
        if (!is_null($nameSitePCH) && !is_string($nameSitePCH)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameSitePCH, true), gettype($nameSitePCH)), __LINE__);
        }
        $this->nameSitePCH = $nameSitePCH;
        
        return $this;
    }
    /**
     * Get numberOfParcels value
     * @return int|null
     */
    public function getNumberOfParcels(): ?int
    {
        return $this->numberOfParcels;
    }
    /**
     * Set numberOfParcels value
     * @param int $numberOfParcels
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setNumberOfParcels(?int $numberOfParcels = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcels) && !(is_int($numberOfParcels) || ctype_digit($numberOfParcels))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcels, true), gettype($numberOfParcels)), __LINE__);
        }
        $this->numberOfParcels = $numberOfParcels;
        
        return $this;
    }
    /**
     * Get publishingDate value
     * @return string|null
     */
    public function getPublishingDate(): ?string
    {
        return $this->publishingDate;
    }
    /**
     * Set publishingDate value
     * @param string $publishingDate
     * @return \ColissimoPostage\StructType\BordereauHeader
     */
    public function setPublishingDate(?string $publishingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($publishingDate) && !is_string($publishingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publishingDate, true), gettype($publishingDate)), __LINE__);
        }
        $this->publishingDate = $publishingDate;
        
        return $this;
    }
}

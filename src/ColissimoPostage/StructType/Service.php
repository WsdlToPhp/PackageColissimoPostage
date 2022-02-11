<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for service StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Service extends AbstractStructBase
{
    /**
     * The productCode
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The depositDate
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The mailBoxPicking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $mailBoxPicking = null;
    /**
     * The mailBoxPickingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mailBoxPickingDate = null;
    /**
     * The vatCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $vatCode = null;
    /**
     * The vatPercentage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $vatPercentage = null;
    /**
     * The vatAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $vatAmount = null;
    /**
     * The transportationAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $transportationAmount = null;
    /**
     * The totalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $totalAmount = null;
    /**
     * The orderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orderNumber = null;
    /**
     * The commercialName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $commercialName = null;
    /**
     * The returnTypeChoice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $returnTypeChoice = null;
    /**
     * The reseauPostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reseauPostal = null;
    /**
     * Constructor method for service
     * @uses Service::setProductCode()
     * @uses Service::setDepositDate()
     * @uses Service::setMailBoxPicking()
     * @uses Service::setMailBoxPickingDate()
     * @uses Service::setVatCode()
     * @uses Service::setVatPercentage()
     * @uses Service::setVatAmount()
     * @uses Service::setTransportationAmount()
     * @uses Service::setTotalAmount()
     * @uses Service::setOrderNumber()
     * @uses Service::setCommercialName()
     * @uses Service::setReturnTypeChoice()
     * @uses Service::setReseauPostal()
     * @param string $productCode
     * @param string $depositDate
     * @param bool $mailBoxPicking
     * @param string $mailBoxPickingDate
     * @param int $vatCode
     * @param int $vatPercentage
     * @param int $vatAmount
     * @param int $transportationAmount
     * @param int $totalAmount
     * @param string $orderNumber
     * @param string $commercialName
     * @param int $returnTypeChoice
     * @param string $reseauPostal
     */
    public function __construct(?string $productCode = null, ?string $depositDate = null, ?bool $mailBoxPicking = null, ?string $mailBoxPickingDate = null, ?int $vatCode = null, ?int $vatPercentage = null, ?int $vatAmount = null, ?int $transportationAmount = null, ?int $totalAmount = null, ?string $orderNumber = null, ?string $commercialName = null, ?int $returnTypeChoice = null, ?string $reseauPostal = null)
    {
        $this
            ->setProductCode($productCode)
            ->setDepositDate($depositDate)
            ->setMailBoxPicking($mailBoxPicking)
            ->setMailBoxPickingDate($mailBoxPickingDate)
            ->setVatCode($vatCode)
            ->setVatPercentage($vatPercentage)
            ->setVatAmount($vatAmount)
            ->setTransportationAmount($transportationAmount)
            ->setTotalAmount($totalAmount)
            ->setOrderNumber($orderNumber)
            ->setCommercialName($commercialName)
            ->setReturnTypeChoice($returnTypeChoice)
            ->setReseauPostal($reseauPostal);
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \ColissimoPostage\StructType\Service
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate(): ?string
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \ColissimoPostage\StructType\Service
     */
    public function setDepositDate(?string $depositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositDate, true), gettype($depositDate)), __LINE__);
        }
        $this->depositDate = $depositDate;
        
        return $this;
    }
    /**
     * Get mailBoxPicking value
     * @return bool|null
     */
    public function getMailBoxPicking(): ?bool
    {
        return $this->mailBoxPicking;
    }
    /**
     * Set mailBoxPicking value
     * @param bool $mailBoxPicking
     * @return \ColissimoPostage\StructType\Service
     */
    public function setMailBoxPicking(?bool $mailBoxPicking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailBoxPicking) && !is_bool($mailBoxPicking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailBoxPicking, true), gettype($mailBoxPicking)), __LINE__);
        }
        $this->mailBoxPicking = $mailBoxPicking;
        
        return $this;
    }
    /**
     * Get mailBoxPickingDate value
     * @return string|null
     */
    public function getMailBoxPickingDate(): ?string
    {
        return $this->mailBoxPickingDate;
    }
    /**
     * Set mailBoxPickingDate value
     * @param string $mailBoxPickingDate
     * @return \ColissimoPostage\StructType\Service
     */
    public function setMailBoxPickingDate(?string $mailBoxPickingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($mailBoxPickingDate) && !is_string($mailBoxPickingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailBoxPickingDate, true), gettype($mailBoxPickingDate)), __LINE__);
        }
        $this->mailBoxPickingDate = $mailBoxPickingDate;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return int|null
     */
    public function getVatCode(): ?int
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param int $vatCode
     * @return \ColissimoPostage\StructType\Service
     */
    public function setVatCode(?int $vatCode = null): self
    {
        // validation for constraint: int
        if (!is_null($vatCode) && !(is_int($vatCode) || ctype_digit($vatCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get vatPercentage value
     * @return int|null
     */
    public function getVatPercentage(): ?int
    {
        return $this->vatPercentage;
    }
    /**
     * Set vatPercentage value
     * @param int $vatPercentage
     * @return \ColissimoPostage\StructType\Service
     */
    public function setVatPercentage(?int $vatPercentage = null): self
    {
        // validation for constraint: int
        if (!is_null($vatPercentage) && !(is_int($vatPercentage) || ctype_digit($vatPercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatPercentage, true), gettype($vatPercentage)), __LINE__);
        }
        $this->vatPercentage = $vatPercentage;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return int|null
     */
    public function getVatAmount(): ?int
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param int $vatAmount
     * @return \ColissimoPostage\StructType\Service
     */
    public function setVatAmount(?int $vatAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($vatAmount) && !(is_int($vatAmount) || ctype_digit($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get transportationAmount value
     * @return int|null
     */
    public function getTransportationAmount(): ?int
    {
        return $this->transportationAmount;
    }
    /**
     * Set transportationAmount value
     * @param int $transportationAmount
     * @return \ColissimoPostage\StructType\Service
     */
    public function setTransportationAmount(?int $transportationAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($transportationAmount) && !(is_int($transportationAmount) || ctype_digit($transportationAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transportationAmount, true), gettype($transportationAmount)), __LINE__);
        }
        $this->transportationAmount = $transportationAmount;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return int|null
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param int $totalAmount
     * @return \ColissimoPostage\StructType\Service
     */
    public function setTotalAmount(?int $totalAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalAmount) && !(is_int($totalAmount) || ctype_digit($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get orderNumber value
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }
    /**
     * Set orderNumber value
     * @param string $orderNumber
     * @return \ColissimoPostage\StructType\Service
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->orderNumber = $orderNumber;
        
        return $this;
    }
    /**
     * Get commercialName value
     * @return string|null
     */
    public function getCommercialName(): ?string
    {
        return $this->commercialName;
    }
    /**
     * Set commercialName value
     * @param string $commercialName
     * @return \ColissimoPostage\StructType\Service
     */
    public function setCommercialName(?string $commercialName = null): self
    {
        // validation for constraint: string
        if (!is_null($commercialName) && !is_string($commercialName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commercialName, true), gettype($commercialName)), __LINE__);
        }
        $this->commercialName = $commercialName;
        
        return $this;
    }
    /**
     * Get returnTypeChoice value
     * @return int|null
     */
    public function getReturnTypeChoice(): ?int
    {
        return $this->returnTypeChoice;
    }
    /**
     * Set returnTypeChoice value
     * @param int $returnTypeChoice
     * @return \ColissimoPostage\StructType\Service
     */
    public function setReturnTypeChoice(?int $returnTypeChoice = null): self
    {
        // validation for constraint: int
        if (!is_null($returnTypeChoice) && !(is_int($returnTypeChoice) || ctype_digit($returnTypeChoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnTypeChoice, true), gettype($returnTypeChoice)), __LINE__);
        }
        $this->returnTypeChoice = $returnTypeChoice;
        
        return $this;
    }
    /**
     * Get reseauPostal value
     * @return string|null
     */
    public function getReseauPostal(): ?string
    {
        return $this->reseauPostal;
    }
    /**
     * Set reseauPostal value
     * @param string $reseauPostal
     * @return \ColissimoPostage\StructType\Service
     */
    public function setReseauPostal(?string $reseauPostal = null): self
    {
        // validation for constraint: string
        if (!is_null($reseauPostal) && !is_string($reseauPostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reseauPostal, true), gettype($reseauPostal)), __LINE__);
        }
        $this->reseauPostal = $reseauPostal;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Parcel extends AbstractStructBase
{
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parcelNumber = null;
    /**
     * The insuranceAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $insuranceAmount = null;
    /**
     * The insuranceValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $insuranceValue = null;
    /**
     * The recommendationLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recommendationLevel = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $weight = null;
    /**
     * The nonMachinable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $nonMachinable = null;
    /**
     * The COD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $COD = null;
    /**
     * The CODAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CODAmount = null;
    /**
     * The CODCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CODCurrency = null;
    /**
     * The returnReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnReceipt = null;
    /**
     * The instructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $instructions = null;
    /**
     * The pickupLocationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pickupLocationId = null;
    /**
     * The ftd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ftd = null;
    /**
     * The ddp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ddp = null;
    /**
     * Constructor method for parcel
     * @uses Parcel::setParcelNumber()
     * @uses Parcel::setInsuranceAmount()
     * @uses Parcel::setInsuranceValue()
     * @uses Parcel::setRecommendationLevel()
     * @uses Parcel::setWeight()
     * @uses Parcel::setNonMachinable()
     * @uses Parcel::setCOD()
     * @uses Parcel::setCODAmount()
     * @uses Parcel::setCODCurrency()
     * @uses Parcel::setReturnReceipt()
     * @uses Parcel::setInstructions()
     * @uses Parcel::setPickupLocationId()
     * @uses Parcel::setFtd()
     * @uses Parcel::setDdp()
     * @param string $parcelNumber
     * @param int $insuranceAmount
     * @param int $insuranceValue
     * @param string $recommendationLevel
     * @param float $weight
     * @param bool $nonMachinable
     * @param bool $cOD
     * @param int $cODAmount
     * @param string $cODCurrency
     * @param bool $returnReceipt
     * @param string $instructions
     * @param string $pickupLocationId
     * @param bool $ftd
     * @param bool $ddp
     */
    public function __construct(?string $parcelNumber = null, ?int $insuranceAmount = null, ?int $insuranceValue = null, ?string $recommendationLevel = null, ?float $weight = null, ?bool $nonMachinable = null, ?bool $cOD = null, ?int $cODAmount = null, ?string $cODCurrency = null, ?bool $returnReceipt = null, ?string $instructions = null, ?string $pickupLocationId = null, ?bool $ftd = null, ?bool $ddp = null)
    {
        $this
            ->setParcelNumber($parcelNumber)
            ->setInsuranceAmount($insuranceAmount)
            ->setInsuranceValue($insuranceValue)
            ->setRecommendationLevel($recommendationLevel)
            ->setWeight($weight)
            ->setNonMachinable($nonMachinable)
            ->setCOD($cOD)
            ->setCODAmount($cODAmount)
            ->setCODCurrency($cODCurrency)
            ->setReturnReceipt($returnReceipt)
            ->setInstructions($instructions)
            ->setPickupLocationId($pickupLocationId)
            ->setFtd($ftd)
            ->setDdp($ddp);
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
     * @return \ColissimoPostage\StructType\Parcel
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
     * Get insuranceAmount value
     * @return int|null
     */
    public function getInsuranceAmount(): ?int
    {
        return $this->insuranceAmount;
    }
    /**
     * Set insuranceAmount value
     * @param int $insuranceAmount
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setInsuranceAmount(?int $insuranceAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($insuranceAmount) && !(is_int($insuranceAmount) || ctype_digit($insuranceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insuranceAmount, true), gettype($insuranceAmount)), __LINE__);
        }
        $this->insuranceAmount = $insuranceAmount;
        
        return $this;
    }
    /**
     * Get insuranceValue value
     * @return int|null
     */
    public function getInsuranceValue(): ?int
    {
        return $this->insuranceValue;
    }
    /**
     * Set insuranceValue value
     * @param int $insuranceValue
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setInsuranceValue(?int $insuranceValue = null): self
    {
        // validation for constraint: int
        if (!is_null($insuranceValue) && !(is_int($insuranceValue) || ctype_digit($insuranceValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insuranceValue, true), gettype($insuranceValue)), __LINE__);
        }
        $this->insuranceValue = $insuranceValue;
        
        return $this;
    }
    /**
     * Get recommendationLevel value
     * @return string|null
     */
    public function getRecommendationLevel(): ?string
    {
        return $this->recommendationLevel;
    }
    /**
     * Set recommendationLevel value
     * @param string $recommendationLevel
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setRecommendationLevel(?string $recommendationLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($recommendationLevel) && !is_string($recommendationLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recommendationLevel, true), gettype($recommendationLevel)), __LINE__);
        }
        $this->recommendationLevel = $recommendationLevel;
        
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get nonMachinable value
     * @return bool|null
     */
    public function getNonMachinable(): ?bool
    {
        return $this->nonMachinable;
    }
    /**
     * Set nonMachinable value
     * @param bool $nonMachinable
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setNonMachinable(?bool $nonMachinable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonMachinable) && !is_bool($nonMachinable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonMachinable, true), gettype($nonMachinable)), __LINE__);
        }
        $this->nonMachinable = $nonMachinable;
        
        return $this;
    }
    /**
     * Get COD value
     * @return bool|null
     */
    public function getCOD(): ?bool
    {
        return $this->COD;
    }
    /**
     * Set COD value
     * @param bool $cOD
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setCOD(?bool $cOD = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cOD) && !is_bool($cOD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cOD, true), gettype($cOD)), __LINE__);
        }
        $this->COD = $cOD;
        
        return $this;
    }
    /**
     * Get CODAmount value
     * @return int|null
     */
    public function getCODAmount(): ?int
    {
        return $this->CODAmount;
    }
    /**
     * Set CODAmount value
     * @param int $cODAmount
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setCODAmount(?int $cODAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($cODAmount) && !(is_int($cODAmount) || ctype_digit($cODAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cODAmount, true), gettype($cODAmount)), __LINE__);
        }
        $this->CODAmount = $cODAmount;
        
        return $this;
    }
    /**
     * Get CODCurrency value
     * @return string|null
     */
    public function getCODCurrency(): ?string
    {
        return $this->CODCurrency;
    }
    /**
     * Set CODCurrency value
     * @param string $cODCurrency
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setCODCurrency(?string $cODCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($cODCurrency) && !is_string($cODCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cODCurrency, true), gettype($cODCurrency)), __LINE__);
        }
        $this->CODCurrency = $cODCurrency;
        
        return $this;
    }
    /**
     * Get returnReceipt value
     * @return bool|null
     */
    public function getReturnReceipt(): ?bool
    {
        return $this->returnReceipt;
    }
    /**
     * Set returnReceipt value
     * @param bool $returnReceipt
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setReturnReceipt(?bool $returnReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnReceipt) && !is_bool($returnReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnReceipt, true), gettype($returnReceipt)), __LINE__);
        }
        $this->returnReceipt = $returnReceipt;
        
        return $this;
    }
    /**
     * Get instructions value
     * @return string|null
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }
    /**
     * Set instructions value
     * @param string $instructions
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setInstructions(?string $instructions = null): self
    {
        // validation for constraint: string
        if (!is_null($instructions) && !is_string($instructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructions, true), gettype($instructions)), __LINE__);
        }
        $this->instructions = $instructions;
        
        return $this;
    }
    /**
     * Get pickupLocationId value
     * @return string|null
     */
    public function getPickupLocationId(): ?string
    {
        return $this->pickupLocationId;
    }
    /**
     * Set pickupLocationId value
     * @param string $pickupLocationId
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setPickupLocationId(?string $pickupLocationId = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocationId) && !is_string($pickupLocationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocationId, true), gettype($pickupLocationId)), __LINE__);
        }
        $this->pickupLocationId = $pickupLocationId;
        
        return $this;
    }
    /**
     * Get ftd value
     * @return bool|null
     */
    public function getFtd(): ?bool
    {
        return $this->ftd;
    }
    /**
     * Set ftd value
     * @param bool $ftd
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setFtd(?bool $ftd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ftd) && !is_bool($ftd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ftd, true), gettype($ftd)), __LINE__);
        }
        $this->ftd = $ftd;
        
        return $this;
    }
    /**
     * Get ddp value
     * @return bool|null
     */
    public function getDdp(): ?bool
    {
        return $this->ddp;
    }
    /**
     * Set ddp value
     * @param bool $ddp
     * @return \ColissimoPostage\StructType\Parcel
     */
    public function setDdp(?bool $ddp = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ddp) && !is_bool($ddp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ddp, true), gettype($ddp)), __LINE__);
        }
        $this->ddp = $ddp;
        
        return $this;
    }
}

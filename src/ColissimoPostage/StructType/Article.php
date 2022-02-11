<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for article StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Article extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The quantity
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The weight
     * @var float|null
     */
    protected ?float $weight = null;
    /**
     * The value
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The hsCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hsCode = null;
    /**
     * The originCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originCountry = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The artref
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $artref = null;
    /**
     * The originalIdent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originalIdent = null;
    /**
     * The vatAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The customsFees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $customsFees = null;
    /**
     * Constructor method for article
     * @uses Article::setDescription()
     * @uses Article::setQuantity()
     * @uses Article::setWeight()
     * @uses Article::setValue()
     * @uses Article::setHsCode()
     * @uses Article::setOriginCountry()
     * @uses Article::setCurrency()
     * @uses Article::setArtref()
     * @uses Article::setOriginalIdent()
     * @uses Article::setVatAmount()
     * @uses Article::setCustomsFees()
     * @param string $description
     * @param int $quantity
     * @param float $weight
     * @param float $value
     * @param string $hsCode
     * @param string $originCountry
     * @param string $currency
     * @param string $artref
     * @param string $originalIdent
     * @param float $vatAmount
     * @param float $customsFees
     */
    public function __construct(?string $description = null, ?int $quantity = null, ?float $weight = null, ?float $value = null, ?string $hsCode = null, ?string $originCountry = null, ?string $currency = null, ?string $artref = null, ?string $originalIdent = null, ?float $vatAmount = null, ?float $customsFees = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setWeight($weight)
            ->setValue($value)
            ->setHsCode($hsCode)
            ->setOriginCountry($originCountry)
            ->setCurrency($currency)
            ->setArtref($artref)
            ->setOriginalIdent($originalIdent)
            ->setVatAmount($vatAmount)
            ->setCustomsFees($customsFees);
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
     * @return \ColissimoPostage\StructType\Article
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
     * Get quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \ColissimoPostage\StructType\Article
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
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
     * @return \ColissimoPostage\StructType\Article
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
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \ColissimoPostage\StructType\Article
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get hsCode value
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }
    /**
     * Set hsCode value
     * @param string $hsCode
     * @return \ColissimoPostage\StructType\Article
     */
    public function setHsCode(?string $hsCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hsCode) && !is_string($hsCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hsCode, true), gettype($hsCode)), __LINE__);
        }
        $this->hsCode = $hsCode;
        
        return $this;
    }
    /**
     * Get originCountry value
     * @return string|null
     */
    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }
    /**
     * Set originCountry value
     * @param string $originCountry
     * @return \ColissimoPostage\StructType\Article
     */
    public function setOriginCountry(?string $originCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($originCountry) && !is_string($originCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originCountry, true), gettype($originCountry)), __LINE__);
        }
        $this->originCountry = $originCountry;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \ColissimoPostage\StructType\Article
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get artref value
     * @return string|null
     */
    public function getArtref(): ?string
    {
        return $this->artref;
    }
    /**
     * Set artref value
     * @param string $artref
     * @return \ColissimoPostage\StructType\Article
     */
    public function setArtref(?string $artref = null): self
    {
        // validation for constraint: string
        if (!is_null($artref) && !is_string($artref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($artref, true), gettype($artref)), __LINE__);
        }
        $this->artref = $artref;
        
        return $this;
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
     * @return \ColissimoPostage\StructType\Article
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
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \ColissimoPostage\StructType\Article
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get customsFees value
     * @return float|null
     */
    public function getCustomsFees(): ?float
    {
        return $this->customsFees;
    }
    /**
     * Set customsFees value
     * @param float $customsFees
     * @return \ColissimoPostage\StructType\Article
     */
    public function setCustomsFees(?float $customsFees = null): self
    {
        // validation for constraint: float
        if (!is_null($customsFees) && !(is_float($customsFees) || is_numeric($customsFees))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customsFees, true), gettype($customsFees)), __LINE__);
        }
        $this->customsFees = $customsFees;
        
        return $this;
    }
}

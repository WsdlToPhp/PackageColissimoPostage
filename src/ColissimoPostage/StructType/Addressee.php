<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressee StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Addressee extends AbstractStructBase
{
    /**
     * The addresseeParcelRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $addresseeParcelRef = null;
    /**
     * The codeBarForReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $codeBarForReference = null;
    /**
     * The serviceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceInfo = null;
    /**
     * The promotionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $promotionCode = null;
    /**
     * The address
     * @var \ColissimoPostage\StructType\Address|null
     */
    protected ?\ColissimoPostage\StructType\Address $address = null;
    /**
     * Constructor method for addressee
     * @uses Addressee::setAddresseeParcelRef()
     * @uses Addressee::setCodeBarForReference()
     * @uses Addressee::setServiceInfo()
     * @uses Addressee::setPromotionCode()
     * @uses Addressee::setAddress()
     * @param string $addresseeParcelRef
     * @param bool $codeBarForReference
     * @param string $serviceInfo
     * @param string $promotionCode
     * @param \ColissimoPostage\StructType\Address $address
     */
    public function __construct(?string $addresseeParcelRef = null, ?bool $codeBarForReference = null, ?string $serviceInfo = null, ?string $promotionCode = null, ?\ColissimoPostage\StructType\Address $address = null)
    {
        $this
            ->setAddresseeParcelRef($addresseeParcelRef)
            ->setCodeBarForReference($codeBarForReference)
            ->setServiceInfo($serviceInfo)
            ->setPromotionCode($promotionCode)
            ->setAddress($address);
    }
    /**
     * Get addresseeParcelRef value
     * @return string|null
     */
    public function getAddresseeParcelRef(): ?string
    {
        return $this->addresseeParcelRef;
    }
    /**
     * Set addresseeParcelRef value
     * @param string $addresseeParcelRef
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setAddresseeParcelRef(?string $addresseeParcelRef = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeParcelRef) && !is_string($addresseeParcelRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeParcelRef, true), gettype($addresseeParcelRef)), __LINE__);
        }
        $this->addresseeParcelRef = $addresseeParcelRef;
        
        return $this;
    }
    /**
     * Get codeBarForReference value
     * @return bool|null
     */
    public function getCodeBarForReference(): ?bool
    {
        return $this->codeBarForReference;
    }
    /**
     * Set codeBarForReference value
     * @param bool $codeBarForReference
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setCodeBarForReference(?bool $codeBarForReference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($codeBarForReference) && !is_bool($codeBarForReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($codeBarForReference, true), gettype($codeBarForReference)), __LINE__);
        }
        $this->codeBarForReference = $codeBarForReference;
        
        return $this;
    }
    /**
     * Get serviceInfo value
     * @return string|null
     */
    public function getServiceInfo(): ?string
    {
        return $this->serviceInfo;
    }
    /**
     * Set serviceInfo value
     * @param string $serviceInfo
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setServiceInfo(?string $serviceInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceInfo) && !is_string($serviceInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceInfo, true), gettype($serviceInfo)), __LINE__);
        }
        $this->serviceInfo = $serviceInfo;
        
        return $this;
    }
    /**
     * Get promotionCode value
     * @return string|null
     */
    public function getPromotionCode(): ?string
    {
        return $this->promotionCode;
    }
    /**
     * Set promotionCode value
     * @param string $promotionCode
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setPromotionCode(?string $promotionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionCode, true), gettype($promotionCode)), __LINE__);
        }
        $this->promotionCode = $promotionCode;
        
        return $this;
    }
    /**
     * Get address value
     * @return \ColissimoPostage\StructType\Address|null
     */
    public function getAddress(): ?\ColissimoPostage\StructType\Address
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \ColissimoPostage\StructType\Address $address
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setAddress(?\ColissimoPostage\StructType\Address $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
}

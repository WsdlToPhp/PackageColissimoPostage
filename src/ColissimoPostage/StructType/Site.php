<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for site StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Site extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\AddressPCH|null
     */
    protected ?\ColissimoPostage\StructType\AddressPCH $address = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for site
     * @uses Site::setAddress()
     * @uses Site::setCode()
     * @uses Site::setName()
     * @param \ColissimoPostage\StructType\AddressPCH $address
     * @param string $code
     * @param string $name
     */
    public function __construct(?\ColissimoPostage\StructType\AddressPCH $address = null, ?string $code = null, ?string $name = null)
    {
        $this
            ->setAddress($address)
            ->setCode($code)
            ->setName($name);
    }
    /**
     * Get address value
     * @return \ColissimoPostage\StructType\AddressPCH|null
     */
    public function getAddress(): ?\ColissimoPostage\StructType\AddressPCH
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \ColissimoPostage\StructType\AddressPCH $address
     * @return \ColissimoPostage\StructType\Site
     */
    public function setAddress(?\ColissimoPostage\StructType\AddressPCH $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \ColissimoPostage\StructType\Site
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \ColissimoPostage\StructType\Site
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
}

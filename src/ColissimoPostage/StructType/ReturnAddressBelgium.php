<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for returnAddressBelgium StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReturnAddressBelgium extends AbstractStructBase
{
    /**
     * The line1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line1 = null;
    /**
     * The line2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line2 = null;
    /**
     * The mention
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mention = null;
    /**
     * Constructor method for returnAddressBelgium
     * @uses ReturnAddressBelgium::setLine1()
     * @uses ReturnAddressBelgium::setLine2()
     * @uses ReturnAddressBelgium::setMention()
     * @param string $line1
     * @param string $line2
     * @param string $mention
     */
    public function __construct(?string $line1 = null, ?string $line2 = null, ?string $mention = null)
    {
        $this
            ->setLine1($line1)
            ->setLine2($line2)
            ->setMention($mention);
    }
    /**
     * Get line1 value
     * @return string|null
     */
    public function getLine1(): ?string
    {
        return $this->line1;
    }
    /**
     * Set line1 value
     * @param string $line1
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium
     */
    public function setLine1(?string $line1 = null): self
    {
        // validation for constraint: string
        if (!is_null($line1) && !is_string($line1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line1, true), gettype($line1)), __LINE__);
        }
        $this->line1 = $line1;
        
        return $this;
    }
    /**
     * Get line2 value
     * @return string|null
     */
    public function getLine2(): ?string
    {
        return $this->line2;
    }
    /**
     * Set line2 value
     * @param string $line2
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium
     */
    public function setLine2(?string $line2 = null): self
    {
        // validation for constraint: string
        if (!is_null($line2) && !is_string($line2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line2, true), gettype($line2)), __LINE__);
        }
        $this->line2 = $line2;
        
        return $this;
    }
    /**
     * Get mention value
     * @return string|null
     */
    public function getMention(): ?string
    {
        return $this->mention;
    }
    /**
     * Set mention value
     * @param string $mention
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium
     */
    public function setMention(?string $mention = null): self
    {
        // validation for constraint: string
        if (!is_null($mention) && !is_string($mention)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mention, true), gettype($mention)), __LINE__);
        }
        $this->mention = $mention;
        
        return $this;
    }
}

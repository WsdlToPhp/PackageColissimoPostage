<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for belgiumLabel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BelgiumLabel extends AbstractStructBase
{
    /**
     * The codeBarre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeBarre = null;
    /**
     * The codeVAS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CodeVAS|null
     */
    protected ?\ColissimoPostage\StructType\CodeVAS $codeVAS = null;
    /**
     * The identification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identification = null;
    /**
     * The returnAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ReturnAddressBelgium|null
     */
    protected ?\ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress = null;
    /**
     * Constructor method for belgiumLabel
     * @uses BelgiumLabel::setCodeBarre()
     * @uses BelgiumLabel::setCodeVAS()
     * @uses BelgiumLabel::setIdentification()
     * @uses BelgiumLabel::setReturnAddress()
     * @param string $codeBarre
     * @param \ColissimoPostage\StructType\CodeVAS $codeVAS
     * @param string $identification
     * @param \ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress
     */
    public function __construct(?string $codeBarre = null, ?\ColissimoPostage\StructType\CodeVAS $codeVAS = null, ?string $identification = null, ?\ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress = null)
    {
        $this
            ->setCodeBarre($codeBarre)
            ->setCodeVAS($codeVAS)
            ->setIdentification($identification)
            ->setReturnAddress($returnAddress);
    }
    /**
     * Get codeBarre value
     * @return string|null
     */
    public function getCodeBarre(): ?string
    {
        return $this->codeBarre;
    }
    /**
     * Set codeBarre value
     * @param string $codeBarre
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setCodeBarre(?string $codeBarre = null): self
    {
        // validation for constraint: string
        if (!is_null($codeBarre) && !is_string($codeBarre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeBarre, true), gettype($codeBarre)), __LINE__);
        }
        $this->codeBarre = $codeBarre;
        
        return $this;
    }
    /**
     * Get codeVAS value
     * @return \ColissimoPostage\StructType\CodeVAS|null
     */
    public function getCodeVAS(): ?\ColissimoPostage\StructType\CodeVAS
    {
        return $this->codeVAS;
    }
    /**
     * Set codeVAS value
     * @param \ColissimoPostage\StructType\CodeVAS $codeVAS
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setCodeVAS(?\ColissimoPostage\StructType\CodeVAS $codeVAS = null): self
    {
        $this->codeVAS = $codeVAS;
        
        return $this;
    }
    /**
     * Get identification value
     * @return string|null
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }
    /**
     * Set identification value
     * @param string $identification
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setIdentification(?string $identification = null): self
    {
        // validation for constraint: string
        if (!is_null($identification) && !is_string($identification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identification, true), gettype($identification)), __LINE__);
        }
        $this->identification = $identification;
        
        return $this;
    }
    /**
     * Get returnAddress value
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium|null
     */
    public function getReturnAddress(): ?\ColissimoPostage\StructType\ReturnAddressBelgium
    {
        return $this->returnAddress;
    }
    /**
     * Set returnAddress value
     * @param \ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setReturnAddress(?\ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress = null): self
    {
        $this->returnAddress = $returnAddress;
        
        return $this;
    }
}

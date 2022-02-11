<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for swissLabel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SwissLabel extends AbstractStructBase
{
    /**
     * The injectionSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $injectionSite = null;
    /**
     * The signatureOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $signatureOption = null;
    /**
     * The codeSwissPost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeSwissPost = null;
    /**
     * The swissParcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $swissParcelNumber = null;
    /**
     * Constructor method for swissLabel
     * @uses SwissLabel::setInjectionSite()
     * @uses SwissLabel::setSignatureOption()
     * @uses SwissLabel::setCodeSwissPost()
     * @uses SwissLabel::setSwissParcelNumber()
     * @param string $injectionSite
     * @param bool $signatureOption
     * @param string $codeSwissPost
     * @param string $swissParcelNumber
     */
    public function __construct(?string $injectionSite = null, ?bool $signatureOption = null, ?string $codeSwissPost = null, ?string $swissParcelNumber = null)
    {
        $this
            ->setInjectionSite($injectionSite)
            ->setSignatureOption($signatureOption)
            ->setCodeSwissPost($codeSwissPost)
            ->setSwissParcelNumber($swissParcelNumber);
    }
    /**
     * Get injectionSite value
     * @return string|null
     */
    public function getInjectionSite(): ?string
    {
        return $this->injectionSite;
    }
    /**
     * Set injectionSite value
     * @param string $injectionSite
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setInjectionSite(?string $injectionSite = null): self
    {
        // validation for constraint: string
        if (!is_null($injectionSite) && !is_string($injectionSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($injectionSite, true), gettype($injectionSite)), __LINE__);
        }
        $this->injectionSite = $injectionSite;
        
        return $this;
    }
    /**
     * Get signatureOption value
     * @return bool|null
     */
    public function getSignatureOption(): ?bool
    {
        return $this->signatureOption;
    }
    /**
     * Set signatureOption value
     * @param bool $signatureOption
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setSignatureOption(?bool $signatureOption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($signatureOption) && !is_bool($signatureOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signatureOption, true), gettype($signatureOption)), __LINE__);
        }
        $this->signatureOption = $signatureOption;
        
        return $this;
    }
    /**
     * Get codeSwissPost value
     * @return string|null
     */
    public function getCodeSwissPost(): ?string
    {
        return $this->codeSwissPost;
    }
    /**
     * Set codeSwissPost value
     * @param string $codeSwissPost
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setCodeSwissPost(?string $codeSwissPost = null): self
    {
        // validation for constraint: string
        if (!is_null($codeSwissPost) && !is_string($codeSwissPost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeSwissPost, true), gettype($codeSwissPost)), __LINE__);
        }
        $this->codeSwissPost = $codeSwissPost;
        
        return $this;
    }
    /**
     * Get swissParcelNumber value
     * @return string|null
     */
    public function getSwissParcelNumber(): ?string
    {
        return $this->swissParcelNumber;
    }
    /**
     * Set swissParcelNumber value
     * @param string $swissParcelNumber
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setSwissParcelNumber(?string $swissParcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($swissParcelNumber) && !is_string($swissParcelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swissParcelNumber, true), gettype($swissParcelNumber)), __LINE__);
        }
        $this->swissParcelNumber = $swissParcelNumber;
        
        return $this;
    }
}

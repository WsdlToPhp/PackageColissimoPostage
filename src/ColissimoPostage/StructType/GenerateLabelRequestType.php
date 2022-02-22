<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateLabelRequestType extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The outputFormat
     * @var \ColissimoPostage\StructType\OutputFormat|null
     */
    protected ?\ColissimoPostage\StructType\OutputFormat $outputFormat = null;
    /**
     * The letter
     * @var \ColissimoPostage\StructType\Letter|null
     */
    protected ?\ColissimoPostage\StructType\Letter $letter = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Fields|null
     */
    protected ?\ColissimoPostage\StructType\Fields $fields = null;
    /**
     * Constructor method for GenerateLabelRequestType
     * @uses GenerateLabelRequestType::setContractNumber()
     * @uses GenerateLabelRequestType::setPassword()
     * @uses GenerateLabelRequestType::setOutputFormat()
     * @uses GenerateLabelRequestType::setLetter()
     * @uses GenerateLabelRequestType::setFields()
     * @param string $contractNumber
     * @param string $password
     * @param \ColissimoPostage\StructType\OutputFormat $outputFormat
     * @param \ColissimoPostage\StructType\Letter $letter
     * @param \ColissimoPostage\StructType\Fields $fields
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?\ColissimoPostage\StructType\OutputFormat $outputFormat = null, ?\ColissimoPostage\StructType\Letter $letter = null, ?\ColissimoPostage\StructType\Fields $fields = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setOutputFormat($outputFormat)
            ->setLetter($letter)
            ->setFields($fields);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get outputFormat value
     * @return \ColissimoPostage\StructType\OutputFormat|null
     */
    public function getOutputFormat(): ?\ColissimoPostage\StructType\OutputFormat
    {
        return $this->outputFormat;
    }
    /**
     * Set outputFormat value
     * @param \ColissimoPostage\StructType\OutputFormat $outputFormat
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setOutputFormat(?\ColissimoPostage\StructType\OutputFormat $outputFormat = null): self
    {
        $this->outputFormat = $outputFormat;
        
        return $this;
    }
    /**
     * Get letter value
     * @return \ColissimoPostage\StructType\Letter|null
     */
    public function getLetter(): ?\ColissimoPostage\StructType\Letter
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param \ColissimoPostage\StructType\Letter $letter
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setLetter(?\ColissimoPostage\StructType\Letter $letter = null): self
    {
        $this->letter = $letter;
        
        return $this;
    }
    /**
     * Get fields value
     * @return \ColissimoPostage\StructType\Fields|null
     */
    public function getFields(): ?\ColissimoPostage\StructType\Fields
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param \ColissimoPostage\StructType\Fields $fields
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setFields(?\ColissimoPostage\StructType\Fields $fields = null): self
    {
        $this->fields = $fields;
        
        return $this;
    }
}

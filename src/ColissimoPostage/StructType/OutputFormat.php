<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for outputFormat StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OutputFormat extends AbstractStructBase
{
    /**
     * The x
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $x = null;
    /**
     * The y
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $y = null;
    /**
     * The outputPrintingType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outputPrintingType = null;
    /**
     * The dematerialized
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $dematerialized = null;
    /**
     * The returnType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnType = null;
    /**
     * The printCODDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $printCODDocument = null;
    /**
     * Constructor method for outputFormat
     * @uses OutputFormat::setX()
     * @uses OutputFormat::setY()
     * @uses OutputFormat::setOutputPrintingType()
     * @uses OutputFormat::setDematerialized()
     * @uses OutputFormat::setReturnType()
     * @uses OutputFormat::setPrintCODDocument()
     * @param int $x
     * @param int $y
     * @param string $outputPrintingType
     * @param bool $dematerialized
     * @param string $returnType
     * @param bool $printCODDocument
     */
    public function __construct(?int $x = null, ?int $y = null, ?string $outputPrintingType = null, ?bool $dematerialized = null, ?string $returnType = null, ?bool $printCODDocument = null)
    {
        $this
            ->setX($x)
            ->setY($y)
            ->setOutputPrintingType($outputPrintingType)
            ->setDematerialized($dematerialized)
            ->setReturnType($returnType)
            ->setPrintCODDocument($printCODDocument);
    }
    /**
     * Get x value
     * @return int|null
     */
    public function getX(): ?int
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param int $x
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setX(?int $x = null): self
    {
        // validation for constraint: int
        if (!is_null($x) && !(is_int($x) || ctype_digit($x))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($x, true), gettype($x)), __LINE__);
        }
        $this->x = $x;
        
        return $this;
    }
    /**
     * Get y value
     * @return int|null
     */
    public function getY(): ?int
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param int $y
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setY(?int $y = null): self
    {
        // validation for constraint: int
        if (!is_null($y) && !(is_int($y) || ctype_digit($y))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($y, true), gettype($y)), __LINE__);
        }
        $this->y = $y;
        
        return $this;
    }
    /**
     * Get outputPrintingType value
     * @return string|null
     */
    public function getOutputPrintingType(): ?string
    {
        return $this->outputPrintingType;
    }
    /**
     * Set outputPrintingType value
     * @param string $outputPrintingType
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setOutputPrintingType(?string $outputPrintingType = null): self
    {
        // validation for constraint: string
        if (!is_null($outputPrintingType) && !is_string($outputPrintingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputPrintingType, true), gettype($outputPrintingType)), __LINE__);
        }
        $this->outputPrintingType = $outputPrintingType;
        
        return $this;
    }
    /**
     * Get dematerialized value
     * @return bool|null
     */
    public function getDematerialized(): ?bool
    {
        return $this->dematerialized;
    }
    /**
     * Set dematerialized value
     * @param bool $dematerialized
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setDematerialized(?bool $dematerialized = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dematerialized) && !is_bool($dematerialized)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dematerialized, true), gettype($dematerialized)), __LINE__);
        }
        $this->dematerialized = $dematerialized;
        
        return $this;
    }
    /**
     * Get returnType value
     * @return string|null
     */
    public function getReturnType(): ?string
    {
        return $this->returnType;
    }
    /**
     * Set returnType value
     * @param string $returnType
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setReturnType(?string $returnType = null): self
    {
        // validation for constraint: string
        if (!is_null($returnType) && !is_string($returnType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnType, true), gettype($returnType)), __LINE__);
        }
        $this->returnType = $returnType;
        
        return $this;
    }
    /**
     * Get printCODDocument value
     * @return bool|null
     */
    public function getPrintCODDocument(): ?bool
    {
        return $this->printCODDocument;
    }
    /**
     * Set printCODDocument value
     * @param bool $printCODDocument
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setPrintCODDocument(?bool $printCODDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printCODDocument) && !is_bool($printCODDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printCODDocument, true), gettype($printCODDocument)), __LINE__);
        }
        $this->printCODDocument = $printCODDocument;
        
        return $this;
    }
}

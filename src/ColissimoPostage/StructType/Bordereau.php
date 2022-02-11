<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereau StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Bordereau extends AbstractStructBase
{
    /**
     * The bordereauDataHandler
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bordereauDataHandler = null;
    /**
     * The bordereauHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\BordereauHeader|null
     */
    protected ?\ColissimoPostage\StructType\BordereauHeader $bordereauHeader = null;
    /**
     * Constructor method for bordereau
     * @uses Bordereau::setBordereauDataHandler()
     * @uses Bordereau::setBordereauHeader()
     * @param string $bordereauDataHandler
     * @param \ColissimoPostage\StructType\BordereauHeader $bordereauHeader
     */
    public function __construct(?string $bordereauDataHandler = null, ?\ColissimoPostage\StructType\BordereauHeader $bordereauHeader = null)
    {
        $this
            ->setBordereauDataHandler($bordereauDataHandler)
            ->setBordereauHeader($bordereauHeader);
    }
    /**
     * Get bordereauDataHandler value
     * @return string|null
     */
    public function getBordereauDataHandler(): ?string
    {
        return $this->bordereauDataHandler;
    }
    /**
     * Set bordereauDataHandler value
     * @param string $bordereauDataHandler
     * @return \ColissimoPostage\StructType\Bordereau
     */
    public function setBordereauDataHandler(?string $bordereauDataHandler = null): self
    {
        // validation for constraint: string
        if (!is_null($bordereauDataHandler) && !is_string($bordereauDataHandler)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bordereauDataHandler, true), gettype($bordereauDataHandler)), __LINE__);
        }
        $this->bordereauDataHandler = $bordereauDataHandler;
        
        return $this;
    }
    /**
     * Get bordereauHeader value
     * @return \ColissimoPostage\StructType\BordereauHeader|null
     */
    public function getBordereauHeader(): ?\ColissimoPostage\StructType\BordereauHeader
    {
        return $this->bordereauHeader;
    }
    /**
     * Set bordereauHeader value
     * @param \ColissimoPostage\StructType\BordereauHeader $bordereauHeader
     * @return \ColissimoPostage\StructType\Bordereau
     */
    public function setBordereauHeader(?\ColissimoPostage\StructType\BordereauHeader $bordereauHeader = null): self
    {
        $this->bordereauHeader = $bordereauHeader;
        
        return $this;
    }
}

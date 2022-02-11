<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauByParcelsNumbers StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateBordereauByParcelsNumbers
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateBordereauByParcelsNumbers extends AbstractStructBase
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
     * The generateBordereauParcelNumberList
     * @var \ColissimoPostage\StructType\GenerateBordereauParcelNumberList|null
     */
    protected ?\ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null;
    /**
     * Constructor method for generateBordereauByParcelsNumbers
     * @uses GenerateBordereauByParcelsNumbers::setContractNumber()
     * @uses GenerateBordereauByParcelsNumbers::setPassword()
     * @uses GenerateBordereauByParcelsNumbers::setGenerateBordereauParcelNumberList()
     * @param string $contractNumber
     * @param string $password
     * @param \ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?\ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setGenerateBordereauParcelNumberList($generateBordereauParcelNumberList);
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
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers
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
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers
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
     * Get generateBordereauParcelNumberList value
     * @return \ColissimoPostage\StructType\GenerateBordereauParcelNumberList|null
     */
    public function getGenerateBordereauParcelNumberList(): ?\ColissimoPostage\StructType\GenerateBordereauParcelNumberList
    {
        return $this->generateBordereauParcelNumberList;
    }
    /**
     * Set generateBordereauParcelNumberList value
     * @param \ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers
     */
    public function setGenerateBordereauParcelNumberList(?\ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null): self
    {
        $this->generateBordereauParcelNumberList = $generateBordereauParcelNumberList;
        
        return $this;
    }
}

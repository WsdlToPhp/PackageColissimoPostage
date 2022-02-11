<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListMailBoxPickingDatesRetourRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDatesRetourRequestType extends AbstractStructBase
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
     * The sender
     * @var \ColissimoPostage\StructType\Sender|null
     */
    protected ?\ColissimoPostage\StructType\Sender $sender = null;
    /**
     * Constructor method for GetListMailBoxPickingDatesRetourRequestType
     * @uses GetListMailBoxPickingDatesRetourRequestType::setContractNumber()
     * @uses GetListMailBoxPickingDatesRetourRequestType::setPassword()
     * @uses GetListMailBoxPickingDatesRetourRequestType::setSender()
     * @param string $contractNumber
     * @param string $password
     * @param \ColissimoPostage\StructType\Sender $sender
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?\ColissimoPostage\StructType\Sender $sender = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setSender($sender);
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
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequestType
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
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequestType
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
     * Get sender value
     * @return \ColissimoPostage\StructType\Sender|null
     */
    public function getSender(): ?\ColissimoPostage\StructType\Sender
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \ColissimoPostage\StructType\Sender $sender
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequestType
     */
    public function setSender(?\ColissimoPostage\StructType\Sender $sender = null): self
    {
        $this->sender = $sender;
        
        return $this;
    }
}

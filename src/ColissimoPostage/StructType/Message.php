<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Message extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The messageContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messageContent = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for Message
     * @uses Message::setId()
     * @uses Message::setMessageContent()
     * @uses Message::setType()
     * @param string $id
     * @param string $messageContent
     * @param string $type
     */
    public function __construct(?string $id = null, ?string $messageContent = null, ?string $type = null)
    {
        $this
            ->setId($id)
            ->setMessageContent($messageContent)
            ->setType($type);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \ColissimoPostage\StructType\Message
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get messageContent value
     * @return string|null
     */
    public function getMessageContent(): ?string
    {
        return $this->messageContent;
    }
    /**
     * Set messageContent value
     * @param string $messageContent
     * @return \ColissimoPostage\StructType\Message
     */
    public function setMessageContent(?string $messageContent = null): self
    {
        // validation for constraint: string
        if (!is_null($messageContent) && !is_string($messageContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageContent, true), gettype($messageContent)), __LINE__);
        }
        $this->messageContent = $messageContent;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \ColissimoPostage\StructType\Message
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}

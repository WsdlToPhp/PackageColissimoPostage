<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListMailBoxPickingDatesResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDatesResponseType extends BaseResponse
{
    /**
     * The mailBoxPickingDateMaxHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mailBoxPickingDateMaxHour = null;
    /**
     * The mailBoxPickingDates
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $mailBoxPickingDates = null;
    /**
     * The validityTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validityTime = null;
    /**
     * Constructor method for GetListMailBoxPickingDatesResponseType
     * @uses GetListMailBoxPickingDatesResponseType::setMailBoxPickingDateMaxHour()
     * @uses GetListMailBoxPickingDatesResponseType::setMailBoxPickingDates()
     * @uses GetListMailBoxPickingDatesResponseType::setValidityTime()
     * @param string $mailBoxPickingDateMaxHour
     * @param string[] $mailBoxPickingDates
     * @param string $validityTime
     */
    public function __construct(?string $mailBoxPickingDateMaxHour = null, ?array $mailBoxPickingDates = null, ?string $validityTime = null)
    {
        $this
            ->setMailBoxPickingDateMaxHour($mailBoxPickingDateMaxHour)
            ->setMailBoxPickingDates($mailBoxPickingDates)
            ->setValidityTime($validityTime);
    }
    /**
     * Get mailBoxPickingDateMaxHour value
     * @return string|null
     */
    public function getMailBoxPickingDateMaxHour(): ?string
    {
        return $this->mailBoxPickingDateMaxHour;
    }
    /**
     * Set mailBoxPickingDateMaxHour value
     * @param string $mailBoxPickingDateMaxHour
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function setMailBoxPickingDateMaxHour(?string $mailBoxPickingDateMaxHour = null): self
    {
        // validation for constraint: string
        if (!is_null($mailBoxPickingDateMaxHour) && !is_string($mailBoxPickingDateMaxHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailBoxPickingDateMaxHour, true), gettype($mailBoxPickingDateMaxHour)), __LINE__);
        }
        $this->mailBoxPickingDateMaxHour = $mailBoxPickingDateMaxHour;
        
        return $this;
    }
    /**
     * Get mailBoxPickingDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getMailBoxPickingDates(): ?array
    {
        return isset($this->mailBoxPickingDates) ? $this->mailBoxPickingDates : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMailBoxPickingDates method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailBoxPickingDates method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailBoxPickingDatesForArrayConstraintsFromSetMailBoxPickingDates(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem) {
            // validation for constraint: itemType
            if (!is_string($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem)) {
                $invalidValues[] = is_object($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem) ? get_class($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem) : sprintf('%s(%s)', gettype($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem), var_export($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mailBoxPickingDates property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mailBoxPickingDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $mailBoxPickingDates
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function setMailBoxPickingDates(?array $mailBoxPickingDates = null): self
    {
        // validation for constraint: array
        if ('' !== ($mailBoxPickingDatesArrayErrorMessage = self::validateMailBoxPickingDatesForArrayConstraintsFromSetMailBoxPickingDates($mailBoxPickingDates))) {
            throw new InvalidArgumentException($mailBoxPickingDatesArrayErrorMessage, __LINE__);
        }
        if (is_null($mailBoxPickingDates) || (is_array($mailBoxPickingDates) && empty($mailBoxPickingDates))) {
            unset($this->mailBoxPickingDates);
        } else {
            $this->mailBoxPickingDates = $mailBoxPickingDates;
        }
        
        return $this;
    }
    /**
     * Add item to mailBoxPickingDates value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function addToMailBoxPickingDates(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mailBoxPickingDates property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mailBoxPickingDates[] = $item;
        
        return $this;
    }
    /**
     * Get validityTime value
     * @return string|null
     */
    public function getValidityTime(): ?string
    {
        return $this->validityTime;
    }
    /**
     * Set validityTime value
     * @param string $validityTime
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function setValidityTime(?string $validityTime = null): self
    {
        // validation for constraint: string
        if (!is_null($validityTime) && !is_string($validityTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validityTime, true), gettype($validityTime)), __LINE__);
        }
        $this->validityTime = $validityTime;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fields StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Fields extends AbstractStructBase
{
    /**
     * The field
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPostage\StructType\Field[]
     */
    protected ?array $field = null;
    /**
     * Constructor method for fields
     * @uses Fields::setField()
     * @param \ColissimoPostage\StructType\Field[] $field
     */
    public function __construct(?array $field = null)
    {
        $this
            ->setField($field);
    }
    /**
     * Get field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPostage\StructType\Field[]
     */
    public function getField(): ?array
    {
        return isset($this->field) ? $this->field : null;
    }
    /**
     * This method is responsible for validating the values passed to the setField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldForArrayConstraintsFromSetField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fieldsFieldItem) {
            // validation for constraint: itemType
            if (!$fieldsFieldItem instanceof \ColissimoPostage\StructType\Field) {
                $invalidValues[] = is_object($fieldsFieldItem) ? get_class($fieldsFieldItem) : sprintf('%s(%s)', gettype($fieldsFieldItem), var_export($fieldsFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The field property can only contain items of type \ColissimoPostage\StructType\Field, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ColissimoPostage\StructType\Field[] $field
     * @return \ColissimoPostage\StructType\Fields
     */
    public function setField(?array $field = null): self
    {
        // validation for constraint: array
        if ('' !== ($fieldArrayErrorMessage = self::validateFieldForArrayConstraintsFromSetField($field))) {
            throw new InvalidArgumentException($fieldArrayErrorMessage, __LINE__);
        }
        if (is_null($field) || (is_array($field) && empty($field))) {
            unset($this->field);
        } else {
            $this->field = $field;
        }
        
        return $this;
    }
    /**
     * Add item to field value
     * @throws InvalidArgumentException
     * @param \ColissimoPostage\StructType\Field $item
     * @return \ColissimoPostage\StructType\Fields
     */
    public function addToField(\ColissimoPostage\StructType\Field $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPostage\StructType\Field) {
            throw new InvalidArgumentException(sprintf('The field property can only contain items of type \ColissimoPostage\StructType\Field, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->field[] = $item;
        
        return $this;
    }
}

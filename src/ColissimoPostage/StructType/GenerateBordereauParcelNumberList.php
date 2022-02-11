<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauParcelNumberList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateBordereauParcelNumberList extends AbstractStructBase
{
    /**
     * The parcelsNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $parcelsNumbers = null;
    /**
     * Constructor method for generateBordereauParcelNumberList
     * @uses GenerateBordereauParcelNumberList::setParcelsNumbers()
     * @param string[] $parcelsNumbers
     */
    public function __construct(?array $parcelsNumbers = null)
    {
        $this
            ->setParcelsNumbers($parcelsNumbers);
    }
    /**
     * Get parcelsNumbers value
     * @return string[]
     */
    public function getParcelsNumbers(): ?array
    {
        return $this->parcelsNumbers;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelsNumbers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelsNumbers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelsNumbersForArrayConstraintsFromSetParcelsNumbers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $generateBordereauParcelNumberListParcelsNumbersItem) {
            // validation for constraint: itemType
            if (!is_string($generateBordereauParcelNumberListParcelsNumbersItem)) {
                $invalidValues[] = is_object($generateBordereauParcelNumberListParcelsNumbersItem) ? get_class($generateBordereauParcelNumberListParcelsNumbersItem) : sprintf('%s(%s)', gettype($generateBordereauParcelNumberListParcelsNumbersItem), var_export($generateBordereauParcelNumberListParcelsNumbersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parcelsNumbers property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set parcelsNumbers value
     * @throws InvalidArgumentException
     * @param string[] $parcelsNumbers
     * @return \ColissimoPostage\StructType\GenerateBordereauParcelNumberList
     */
    public function setParcelsNumbers(?array $parcelsNumbers = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelsNumbersArrayErrorMessage = self::validateParcelsNumbersForArrayConstraintsFromSetParcelsNumbers($parcelsNumbers))) {
            throw new InvalidArgumentException($parcelsNumbersArrayErrorMessage, __LINE__);
        }
        $this->parcelsNumbers = $parcelsNumbers;
        
        return $this;
    }
    /**
     * Add item to parcelsNumbers value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ColissimoPostage\StructType\GenerateBordereauParcelNumberList
     */
    public function addToParcelsNumbers(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The parcelsNumbers property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelsNumbers[] = $item;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contents StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Contents extends AbstractStructBase
{
    /**
     * The article
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPostage\StructType\Article[]
     */
    protected ?array $article = null;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Category|null
     */
    protected ?\ColissimoPostage\StructType\Category $category = null;
    /**
     * The original
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPostage\StructType\Original[]
     */
    protected ?array $original = null;
    /**
     * The explanations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $explanations = null;
    /**
     * Constructor method for contents
     * @uses Contents::setArticle()
     * @uses Contents::setCategory()
     * @uses Contents::setOriginal()
     * @uses Contents::setExplanations()
     * @param \ColissimoPostage\StructType\Article[] $article
     * @param \ColissimoPostage\StructType\Category $category
     * @param \ColissimoPostage\StructType\Original[] $original
     * @param string $explanations
     */
    public function __construct(?array $article = null, ?\ColissimoPostage\StructType\Category $category = null, ?array $original = null, ?string $explanations = null)
    {
        $this
            ->setArticle($article)
            ->setCategory($category)
            ->setOriginal($original)
            ->setExplanations($explanations);
    }
    /**
     * Get article value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPostage\StructType\Article[]
     */
    public function getArticle(): ?array
    {
        return isset($this->article) ? $this->article : null;
    }
    /**
     * This method is responsible for validating the values passed to the setArticle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArticle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArticleForArrayConstraintsFromSetArticle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contentsArticleItem) {
            // validation for constraint: itemType
            if (!$contentsArticleItem instanceof \ColissimoPostage\StructType\Article) {
                $invalidValues[] = is_object($contentsArticleItem) ? get_class($contentsArticleItem) : sprintf('%s(%s)', gettype($contentsArticleItem), var_export($contentsArticleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The article property can only contain items of type \ColissimoPostage\StructType\Article, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set article value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ColissimoPostage\StructType\Article[] $article
     * @return \ColissimoPostage\StructType\Contents
     */
    public function setArticle(?array $article = null): self
    {
        // validation for constraint: array
        if ('' !== ($articleArrayErrorMessage = self::validateArticleForArrayConstraintsFromSetArticle($article))) {
            throw new InvalidArgumentException($articleArrayErrorMessage, __LINE__);
        }
        if (is_null($article) || (is_array($article) && empty($article))) {
            unset($this->article);
        } else {
            $this->article = $article;
        }
        
        return $this;
    }
    /**
     * Add item to article value
     * @throws InvalidArgumentException
     * @param \ColissimoPostage\StructType\Article $item
     * @return \ColissimoPostage\StructType\Contents
     */
    public function addToArticle(\ColissimoPostage\StructType\Article $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPostage\StructType\Article) {
            throw new InvalidArgumentException(sprintf('The article property can only contain items of type \ColissimoPostage\StructType\Article, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->article[] = $item;
        
        return $this;
    }
    /**
     * Get category value
     * @return \ColissimoPostage\StructType\Category|null
     */
    public function getCategory(): ?\ColissimoPostage\StructType\Category
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param \ColissimoPostage\StructType\Category $category
     * @return \ColissimoPostage\StructType\Contents
     */
    public function setCategory(?\ColissimoPostage\StructType\Category $category = null): self
    {
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get original value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPostage\StructType\Original[]
     */
    public function getOriginal(): ?array
    {
        return isset($this->original) ? $this->original : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOriginal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOriginal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOriginalForArrayConstraintsFromSetOriginal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contentsOriginalItem) {
            // validation for constraint: itemType
            if (!$contentsOriginalItem instanceof \ColissimoPostage\StructType\Original) {
                $invalidValues[] = is_object($contentsOriginalItem) ? get_class($contentsOriginalItem) : sprintf('%s(%s)', gettype($contentsOriginalItem), var_export($contentsOriginalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The original property can only contain items of type \ColissimoPostage\StructType\Original, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set original value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ColissimoPostage\StructType\Original[] $original
     * @return \ColissimoPostage\StructType\Contents
     */
    public function setOriginal(?array $original = null): self
    {
        // validation for constraint: array
        if ('' !== ($originalArrayErrorMessage = self::validateOriginalForArrayConstraintsFromSetOriginal($original))) {
            throw new InvalidArgumentException($originalArrayErrorMessage, __LINE__);
        }
        if (is_null($original) || (is_array($original) && empty($original))) {
            unset($this->original);
        } else {
            $this->original = $original;
        }
        
        return $this;
    }
    /**
     * Add item to original value
     * @throws InvalidArgumentException
     * @param \ColissimoPostage\StructType\Original $item
     * @return \ColissimoPostage\StructType\Contents
     */
    public function addToOriginal(\ColissimoPostage\StructType\Original $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPostage\StructType\Original) {
            throw new InvalidArgumentException(sprintf('The original property can only contain items of type \ColissimoPostage\StructType\Original, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->original[] = $item;
        
        return $this;
    }
    /**
     * Get explanations value
     * @return string|null
     */
    public function getExplanations(): ?string
    {
        return $this->explanations;
    }
    /**
     * Set explanations value
     * @param string $explanations
     * @return \ColissimoPostage\StructType\Contents
     */
    public function setExplanations(?string $explanations = null): self
    {
        // validation for constraint: string
        if (!is_null($explanations) && !is_string($explanations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanations, true), gettype($explanations)), __LINE__);
        }
        $this->explanations = $explanations;
        
        return $this;
    }
}

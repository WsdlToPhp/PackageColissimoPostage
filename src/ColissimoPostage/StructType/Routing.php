<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routing StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Routing extends AbstractStructBase
{
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $barcodeId = null;
    /**
     * The depotDest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depotDest = null;
    /**
     * The destinationCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationCountry = null;
    /**
     * The destinationCountryText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationCountryText = null;
    /**
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupingPriorityLabel = null;
    /**
     * The partnerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $partnerType = null;
    /**
     * The routingVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $routingVersion = null;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceMark = null;
    /**
     * The serviceText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceText = null;
    /**
     * The sortDest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortDest = null;
    /**
     * The sortOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortOrigin = null;
    /**
     * Constructor method for routing
     * @uses Routing::setBarcodeId()
     * @uses Routing::setDepotDest()
     * @uses Routing::setDestinationCountry()
     * @uses Routing::setDestinationCountryText()
     * @uses Routing::setGroupingPriorityLabel()
     * @uses Routing::setPartnerType()
     * @uses Routing::setRoutingVersion()
     * @uses Routing::setServiceMark()
     * @uses Routing::setServiceText()
     * @uses Routing::setSortDest()
     * @uses Routing::setSortOrigin()
     * @param string $barcodeId
     * @param string $depotDest
     * @param string $destinationCountry
     * @param string $destinationCountryText
     * @param string $groupingPriorityLabel
     * @param string $partnerType
     * @param string $routingVersion
     * @param string $serviceMark
     * @param string $serviceText
     * @param string $sortDest
     * @param string $sortOrigin
     */
    public function __construct(?string $barcodeId = null, ?string $depotDest = null, ?string $destinationCountry = null, ?string $destinationCountryText = null, ?string $groupingPriorityLabel = null, ?string $partnerType = null, ?string $routingVersion = null, ?string $serviceMark = null, ?string $serviceText = null, ?string $sortDest = null, ?string $sortOrigin = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setDepotDest($depotDest)
            ->setDestinationCountry($destinationCountry)
            ->setDestinationCountryText($destinationCountryText)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setPartnerType($partnerType)
            ->setRoutingVersion($routingVersion)
            ->setServiceMark($serviceMark)
            ->setServiceText($serviceText)
            ->setSortDest($sortDest)
            ->setSortOrigin($sortOrigin);
    }
    /**
     * Get barcodeId value
     * @return string|null
     */
    public function getBarcodeId(): ?string
    {
        return $this->barcodeId;
    }
    /**
     * Set barcodeId value
     * @param string $barcodeId
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setBarcodeId(?string $barcodeId = null): self
    {
        // validation for constraint: string
        if (!is_null($barcodeId) && !is_string($barcodeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), gettype($barcodeId)), __LINE__);
        }
        $this->barcodeId = $barcodeId;
        
        return $this;
    }
    /**
     * Get depotDest value
     * @return string|null
     */
    public function getDepotDest(): ?string
    {
        return $this->depotDest;
    }
    /**
     * Set depotDest value
     * @param string $depotDest
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setDepotDest(?string $depotDest = null): self
    {
        // validation for constraint: string
        if (!is_null($depotDest) && !is_string($depotDest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depotDest, true), gettype($depotDest)), __LINE__);
        }
        $this->depotDest = $depotDest;
        
        return $this;
    }
    /**
     * Get destinationCountry value
     * @return string|null
     */
    public function getDestinationCountry(): ?string
    {
        return $this->destinationCountry;
    }
    /**
     * Set destinationCountry value
     * @param string $destinationCountry
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setDestinationCountry(?string $destinationCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCountry) && !is_string($destinationCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCountry, true), gettype($destinationCountry)), __LINE__);
        }
        $this->destinationCountry = $destinationCountry;
        
        return $this;
    }
    /**
     * Get destinationCountryText value
     * @return string|null
     */
    public function getDestinationCountryText(): ?string
    {
        return $this->destinationCountryText;
    }
    /**
     * Set destinationCountryText value
     * @param string $destinationCountryText
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setDestinationCountryText(?string $destinationCountryText = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCountryText) && !is_string($destinationCountryText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCountryText, true), gettype($destinationCountryText)), __LINE__);
        }
        $this->destinationCountryText = $destinationCountryText;
        
        return $this;
    }
    /**
     * Get groupingPriorityLabel value
     * @return string|null
     */
    public function getGroupingPriorityLabel(): ?string
    {
        return $this->groupingPriorityLabel;
    }
    /**
     * Set groupingPriorityLabel value
     * @param string $groupingPriorityLabel
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setGroupingPriorityLabel(?string $groupingPriorityLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($groupingPriorityLabel) && !is_string($groupingPriorityLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriorityLabel, true), gettype($groupingPriorityLabel)), __LINE__);
        }
        $this->groupingPriorityLabel = $groupingPriorityLabel;
        
        return $this;
    }
    /**
     * Get partnerType value
     * @return string|null
     */
    public function getPartnerType(): ?string
    {
        return $this->partnerType;
    }
    /**
     * Set partnerType value
     * @param string $partnerType
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setPartnerType(?string $partnerType = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerType) && !is_string($partnerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerType, true), gettype($partnerType)), __LINE__);
        }
        $this->partnerType = $partnerType;
        
        return $this;
    }
    /**
     * Get routingVersion value
     * @return string|null
     */
    public function getRoutingVersion(): ?string
    {
        return $this->routingVersion;
    }
    /**
     * Set routingVersion value
     * @param string $routingVersion
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setRoutingVersion(?string $routingVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($routingVersion) && !is_string($routingVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingVersion, true), gettype($routingVersion)), __LINE__);
        }
        $this->routingVersion = $routingVersion;
        
        return $this;
    }
    /**
     * Get serviceMark value
     * @return string|null
     */
    public function getServiceMark(): ?string
    {
        return $this->serviceMark;
    }
    /**
     * Set serviceMark value
     * @param string $serviceMark
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setServiceMark(?string $serviceMark = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        
        return $this;
    }
    /**
     * Get serviceText value
     * @return string|null
     */
    public function getServiceText(): ?string
    {
        return $this->serviceText;
    }
    /**
     * Set serviceText value
     * @param string $serviceText
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setServiceText(?string $serviceText = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceText) && !is_string($serviceText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceText, true), gettype($serviceText)), __LINE__);
        }
        $this->serviceText = $serviceText;
        
        return $this;
    }
    /**
     * Get sortDest value
     * @return string|null
     */
    public function getSortDest(): ?string
    {
        return $this->sortDest;
    }
    /**
     * Set sortDest value
     * @param string $sortDest
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setSortDest(?string $sortDest = null): self
    {
        // validation for constraint: string
        if (!is_null($sortDest) && !is_string($sortDest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortDest, true), gettype($sortDest)), __LINE__);
        }
        $this->sortDest = $sortDest;
        
        return $this;
    }
    /**
     * Get sortOrigin value
     * @return string|null
     */
    public function getSortOrigin(): ?string
    {
        return $this->sortOrigin;
    }
    /**
     * Set sortOrigin value
     * @param string $sortOrigin
     * @return \ColissimoPostage\StructType\Routing
     */
    public function setSortOrigin(?string $sortOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($sortOrigin) && !is_string($sortOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrigin, true), gettype($sortOrigin)), __LINE__);
        }
        $this->sortOrigin = $sortOrigin;
        
        return $this;
    }
}

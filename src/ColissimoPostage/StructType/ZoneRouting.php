<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneRouting StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneRouting extends AbstractStructBase
{
    /**
     * The zoneCABRoutage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ZoneCABRoutage|null
     */
    protected ?\ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage = null;
    /**
     * The zoneInfosRoutage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ZoneInfosRoutage|null
     */
    protected ?\ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage = null;
    /**
     * Constructor method for zoneRouting
     * @uses ZoneRouting::setZoneCABRoutage()
     * @uses ZoneRouting::setZoneInfosRoutage()
     * @param \ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage
     * @param \ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage
     */
    public function __construct(?\ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage = null, ?\ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage = null)
    {
        $this
            ->setZoneCABRoutage($zoneCABRoutage)
            ->setZoneInfosRoutage($zoneInfosRoutage);
    }
    /**
     * Get zoneCABRoutage value
     * @return \ColissimoPostage\StructType\ZoneCABRoutage|null
     */
    public function getZoneCABRoutage(): ?\ColissimoPostage\StructType\ZoneCABRoutage
    {
        return $this->zoneCABRoutage;
    }
    /**
     * Set zoneCABRoutage value
     * @param \ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage
     * @return \ColissimoPostage\StructType\ZoneRouting
     */
    public function setZoneCABRoutage(?\ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage = null): self
    {
        $this->zoneCABRoutage = $zoneCABRoutage;
        
        return $this;
    }
    /**
     * Get zoneInfosRoutage value
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage|null
     */
    public function getZoneInfosRoutage(): ?\ColissimoPostage\StructType\ZoneInfosRoutage
    {
        return $this->zoneInfosRoutage;
    }
    /**
     * Set zoneInfosRoutage value
     * @param \ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage
     * @return \ColissimoPostage\StructType\ZoneRouting
     */
    public function setZoneInfosRoutage(?\ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage = null): self
    {
        $this->zoneInfosRoutage = $zoneInfosRoutage;
        
        return $this;
    }
}

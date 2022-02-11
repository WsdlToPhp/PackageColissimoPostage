<?php

declare(strict_types=1);

namespace ColissimoPostage\ServiceType;

use SoapFault;
use \SoapClient\SoapClientBase;

/**
 * This class stands for Plan ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Plan extends SoapClientBase
{
    /**
     * Method to call the operation originally named planPickup
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\PlanPickup $parameters
     * @return \ColissimoPostage\StructType\PlanPickupResponse|bool
     */
    public function planPickup(\ColissimoPostage\StructType\PlanPickup $parameters)
    {
        try {
            $this->setResult($resultPlanPickup = $this->getSoapClient()->__soapCall('planPickup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPlanPickup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPostage\StructType\PlanPickupResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Get extends SoapClientBase
{
    /**
     * Method to call the operation originally named getListMailBoxPickingDates
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDates $parameters
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponse|bool
     */
    public function getListMailBoxPickingDates(\ColissimoPostage\StructType\GetListMailBoxPickingDates $parameters)
    {
        try {
            $this->setResult($resultGetListMailBoxPickingDates = $this->getSoapClient()->__soapCall('getListMailBoxPickingDates', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListMailBoxPickingDates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductInter
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GetProductInter $parameters
     * @return \ColissimoPostage\StructType\GetProductInterResponse|bool
     */
    public function getProductInter(\ColissimoPostage\StructType\GetProductInter $parameters)
    {
        try {
            $this->setResult($resultGetProductInter = $this->getSoapClient()->__soapCall('getProductInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBordereauByNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GetBordereauByNumber $parameters
     * @return \ColissimoPostage\StructType\GetBordereauByNumberResponse|bool
     */
    public function getBordereauByNumber(\ColissimoPostage\StructType\GetBordereauByNumber $parameters)
    {
        try {
            $this->setResult($resultGetBordereauByNumber = $this->getSoapClient()->__soapCall('getBordereauByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBordereauByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPostage\StructType\GetBordereauByNumberResponse|\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponse|\ColissimoPostage\StructType\GetProductInterResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

<?php

declare(strict_types=1);

namespace ColissimoPostage\ServiceType;

use SoapFault;
use \SoapClient\SoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Generate extends SoapClientBase
{
    /**
     * Method to call the operation originally named generateLabel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GenerateLabel $parameters
     * @return \ColissimoPostage\StructType\GenerateLabelResponse|bool
     */
    public function generateLabel(\ColissimoPostage\StructType\GenerateLabel $parameters)
    {
        try {
            $this->setResult($resultGenerateLabel = $this->getSoapClient()->__soapCall('generateLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateBordereauByParcelsNumbers
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers $parameters
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbersResponse|bool
     */
    public function generateBordereauByParcelsNumbers(\ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers $parameters)
    {
        try {
            $this->setResult($resultGenerateBordereauByParcelsNumbers = $this->getSoapClient()->__soapCall('generateBordereauByParcelsNumbers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateBordereauByParcelsNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbersResponse|\ColissimoPostage\StructType\GenerateLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

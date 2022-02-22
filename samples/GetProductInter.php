<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';
/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use ColissimoPostage\ClassMap;
use ColissimoPostage\ServiceType\Get;
use ColissimoPostage\StructType\GetProductInter;
use ColissimoPostage\StructType\GetProductInterRequest;
/**
 * Your Colissimo credentials
 */
define('COLISSIMO_WS_CONTRACT_NUMBER', '******');
/**
 * Your Office 365 passowrd
 */
define('COLISSIMO_WS_PASSWORD', '************');
/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);
/**
 * Samples for Get ServiceType
 */
$get = new Get($options);
/**
 * Send the request
 */
$result = $get->getProductInter(new GetProductInter(new GetProductInterRequest(COLISSIMO_WS_CONTRACT_NUMBER, COLISSIMO_WS_PASSWORD, 'COLI', 0, 0, 1, 'DZ', '2000')));
/**
 * Debug informations provided by the utility methods
 */
if (false) {
    echo 'XML Request: ' . $get->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $get->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $get->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $get->getLastResponseHeaders() . "\r\n";
}
/**
 * Sample call for getProductInter operation/method
 */
if ($result !== false) {
    $messages = $result->getReturn()->getMessages();
    echo sprintf('Product: %s', implode(',', $result->getReturn()->getProduct())) . PHP_EOL;
    echo sprintf('PartnerType: %s', $result->getReturn()->getPartnerType()) . PHP_EOL;
    echo sprintf('ReturnTypeChoice: %s', implode(', ', $result->getReturn()->getReturnTypeChoice())) . PHP_EOL;
    echo sprintf('Message: %s', array_shift($messages)->getMessageContent()) . PHP_EOL;
} else {
    echo $get->getLastErrorForMethod(sprintf('%s::Get', Get::class))->getMessage();
}

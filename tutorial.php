<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ColissimoPostage\ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \ColissimoPostage\ServiceType\Get($options);
/**
 * Sample call for getListMailBoxPickingDates operation/method
 */
if ($get->getListMailBoxPickingDates(new \ColissimoPostage\StructType\GetListMailBoxPickingDates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProductInter operation/method
 */
if ($get->getProductInter(new \ColissimoPostage\StructType\GetProductInter()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBordereauByNumber operation/method
 */
if ($get->getBordereauByNumber(new \ColissimoPostage\StructType\GetBordereauByNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Generate ServiceType
 */
$generate = new \ColissimoPostage\ServiceType\Generate($options);
/**
 * Sample call for generateLabel operation/method
 */
if ($generate->generateLabel(new \ColissimoPostage\StructType\GenerateLabel()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for generateBordereauByParcelsNumbers operation/method
 */
if ($generate->generateBordereauByParcelsNumbers(new \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Samples for Plan ServiceType
 */
$plan = new \ColissimoPostage\ServiceType\Plan($options);
/**
 * Sample call for planPickup operation/method
 */
if ($plan->planPickup(new \ColissimoPostage\StructType\PlanPickup()) !== false) {
    print_r($plan->getResult());
} else {
    print_r($plan->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \ColissimoPostage\ServiceType\Check($options);
/**
 * Sample call for checkGenerateLabel operation/method
 */
if ($check->checkGenerateLabel(new \ColissimoPostage\StructType\CheckGenerateLabel()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}

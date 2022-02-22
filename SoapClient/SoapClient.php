<?php

declare(strict_types=1);

namespace SoapClient;

/**
 * This class can be overridden at your will.
 * Its only purpose is to show you how you can use your own SoapClient client.
 */
final class SoapClient extends \SoapClient
{
    /**
     * Final XML request
     * @var string|null
     */
    public ?string $lastRequest = null;

    /**
     * @see SoapClient::__doRequest()
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = null): ?string
    {
        /**
         * Colissimo does not support type definition
         */
        $request = str_replace(' xsi:type="ns1:outputFormat"', '', $request);
        $request = str_replace(' xsi:type="ns1:letter"', '', $request);
        $request = str_replace(' xsi:type="ns1:address"', '', $request);
        $request = str_replace(' xsi:type="ns1:sender"', '', $request);
        /**
         * Colissimo returns headers and boundary parts
         */
        $response = parent::__doRequest($this->lastRequest = $request, $location, $action, $version, $oneWay);
        if (empty($response)) {
            return $response;
        }
        /**
         * So we only keep the XML envelope
         */
        $response = substr($response, strpos($response, '<soap:Envelope '), strrpos($response, '</soap:Envelope>') - strpos($response, '<soap:Envelope ') + strlen('</soap:Envelope>'));
        return '<?xml version="1.0" encoding="UTF-8"?>' . trim($response);
    }
    /**
     * Override it in order to return the final XML Request
     * @see SoapClient::__getLastRequest()
     * @return string|null
     */
    public function __getLastRequest(): ?string
    {
        return $this->lastRequest;
    }
}

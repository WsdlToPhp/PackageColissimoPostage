<?php

declare(strict_types=1);

namespace ColissimoPostage;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'CheckGenerateLabelRequestType' => '\\ColissimoPostage\\StructType\\CheckGenerateLabelRequestType',
            'outputFormat' => '\\ColissimoPostage\\StructType\\OutputFormat',
            'letter' => '\\ColissimoPostage\\StructType\\Letter',
            'service' => '\\ColissimoPostage\\StructType\\Service',
            'parcel' => '\\ColissimoPostage\\StructType\\Parcel',
            'customsDeclarations' => '\\ColissimoPostage\\StructType\\CustomsDeclarations',
            'contents' => '\\ColissimoPostage\\StructType\\Contents',
            'article' => '\\ColissimoPostage\\StructType\\Article',
            'category' => '\\ColissimoPostage\\StructType\\Category',
            'original' => '\\ColissimoPostage\\StructType\\Original',
            'importerAddress' => '\\ColissimoPostage\\StructType\\ImporterAddress',
            'sender' => '\\ColissimoPostage\\StructType\\Sender',
            'address' => '\\ColissimoPostage\\StructType\\Address',
            'addressee' => '\\ColissimoPostage\\StructType\\Addressee',
            'codSenderAddress' => '\\ColissimoPostage\\StructType\\CodSenderAddress',
            'uploadDocument' => '\\ColissimoPostage\\StructType\\UploadDocument',
            'fields' => '\\ColissimoPostage\\StructType\\Fields',
            'field' => '\\ColissimoPostage\\StructType\\Field',
            'GenerateLabelRequestType' => '\\ColissimoPostage\\StructType\\GenerateLabelRequestType',
            'GetListMailBoxPickingDatesRetourRequestType' => '\\ColissimoPostage\\StructType\\GetListMailBoxPickingDatesRetourRequestType',
            'GetProductInterRequestType' => '\\ColissimoPostage\\StructType\\GetProductInterRequestType',
            'planPickupRequestType' => '\\ColissimoPostage\\StructType\\PlanPickupRequestType',
            'getListMailBoxPickingDates' => '\\ColissimoPostage\\StructType\\GetListMailBoxPickingDates',
            'getListMailBoxPickingDatesRetourRequest' => '\\ColissimoPostage\\StructType\\GetListMailBoxPickingDatesRetourRequest',
            'getListMailBoxPickingDatesResponse' => '\\ColissimoPostage\\StructType\\GetListMailBoxPickingDatesResponse',
            'GetListMailBoxPickingDatesResponseType' => '\\ColissimoPostage\\StructType\\GetListMailBoxPickingDatesResponseType',
            'baseResponse' => '\\ColissimoPostage\\StructType\\BaseResponse',
            'Message' => '\\ColissimoPostage\\StructType\\Message',
            'generateLabel' => '\\ColissimoPostage\\StructType\\GenerateLabel',
            'generateLabelRequest' => '\\ColissimoPostage\\StructType\\GenerateLabelRequest',
            'generateLabelResponse' => '\\ColissimoPostage\\StructType\\GenerateLabelResponse',
            'GenerateLabelResponseType' => '\\ColissimoPostage\\StructType\\GenerateLabelResponseType',
            'xmlResponse' => '\\ColissimoPostage\\StructType\\XmlResponse',
            'belgiumLabel' => '\\ColissimoPostage\\StructType\\BelgiumLabel',
            'codeVAS' => '\\ColissimoPostage\\StructType\\CodeVAS',
            'returnAddressBelgium' => '\\ColissimoPostage\\StructType\\ReturnAddressBelgium',
            'elementVisual' => '\\ColissimoPostage\\StructType\\ElementVisual',
            'pickupLocation' => '\\ColissimoPostage\\StructType\\PickupLocation',
            'addressPickupLocation' => '\\ColissimoPostage\\StructType\\AddressPickupLocation',
            'routing' => '\\ColissimoPostage\\StructType\\Routing',
            'site' => '\\ColissimoPostage\\StructType\\Site',
            'addressPCH' => '\\ColissimoPostage\\StructType\\AddressPCH',
            'swissLabel' => '\\ColissimoPostage\\StructType\\SwissLabel',
            'zoneRouting' => '\\ColissimoPostage\\StructType\\ZoneRouting',
            'zoneCABRoutage' => '\\ColissimoPostage\\StructType\\ZoneCABRoutage',
            'zoneInfosRoutage' => '\\ColissimoPostage\\StructType\\ZoneInfosRoutage',
            'labelResponse' => '\\ColissimoPostage\\StructType\\LabelResponse',
            'planPickup' => '\\ColissimoPostage\\StructType\\PlanPickup',
            'planPickupRequest' => '\\ColissimoPostage\\StructType\\PlanPickupRequest',
            'planPickupResponse' => '\\ColissimoPostage\\StructType\\PlanPickupResponse',
            'planPickupResponseType' => '\\ColissimoPostage\\StructType\\PlanPickupResponseType',
            'checkGenerateLabel' => '\\ColissimoPostage\\StructType\\CheckGenerateLabel',
            'checkGenerateLabelRequest' => '\\ColissimoPostage\\StructType\\CheckGenerateLabelRequest',
            'checkGenerateLabelResponse' => '\\ColissimoPostage\\StructType\\CheckGenerateLabelResponse',
            'CheckGenerateLabelResponseType' => '\\ColissimoPostage\\StructType\\CheckGenerateLabelResponseType',
            'getProductInter' => '\\ColissimoPostage\\StructType\\GetProductInter',
            'getProductInterRequest' => '\\ColissimoPostage\\StructType\\GetProductInterRequest',
            'getProductInterResponse' => '\\ColissimoPostage\\StructType\\GetProductInterResponse',
            'GetProductInterResponseType' => '\\ColissimoPostage\\StructType\\GetProductInterResponseType',
            'generateBordereauByParcelsNumbers' => '\\ColissimoPostage\\StructType\\GenerateBordereauByParcelsNumbers',
            'generateBordereauParcelNumberList' => '\\ColissimoPostage\\StructType\\GenerateBordereauParcelNumberList',
            'generateBordereauByParcelsNumbersResponse' => '\\ColissimoPostage\\StructType\\GenerateBordereauByParcelsNumbersResponse',
            'bordereauResponse' => '\\ColissimoPostage\\StructType\\BordereauResponse',
            'bordereau' => '\\ColissimoPostage\\StructType\\Bordereau',
            'bordereauHeader' => '\\ColissimoPostage\\StructType\\BordereauHeader',
            'getBordereauByNumber' => '\\ColissimoPostage\\StructType\\GetBordereauByNumber',
            'getBordereauByNumberResponse' => '\\ColissimoPostage\\StructType\\GetBordereauByNumberResponse',
        ];
    }
}

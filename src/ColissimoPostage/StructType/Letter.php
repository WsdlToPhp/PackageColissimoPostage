<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for letter StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Letter extends AbstractStructBase
{
    /**
     * The service
     * @var \ColissimoPostage\StructType\Service|null
     */
    protected ?\ColissimoPostage\StructType\Service $service = null;
    /**
     * The parcel
     * @var \ColissimoPostage\StructType\Parcel|null
     */
    protected ?\ColissimoPostage\StructType\Parcel $parcel = null;
    /**
     * The customsDeclarations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CustomsDeclarations|null
     */
    protected ?\ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations = null;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Sender|null
     */
    protected ?\ColissimoPostage\StructType\Sender $sender = null;
    /**
     * The addressee
     * @var \ColissimoPostage\StructType\Addressee|null
     */
    protected ?\ColissimoPostage\StructType\Addressee $addressee = null;
    /**
     * The codSenderAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CodSenderAddress|null
     */
    protected ?\ColissimoPostage\StructType\CodSenderAddress $codSenderAddress = null;
    /**
     * The uploadDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\UploadDocument|null
     */
    protected ?\ColissimoPostage\StructType\UploadDocument $uploadDocument = null;
    /**
     * Constructor method for letter
     * @uses Letter::setService()
     * @uses Letter::setParcel()
     * @uses Letter::setCustomsDeclarations()
     * @uses Letter::setSender()
     * @uses Letter::setAddressee()
     * @uses Letter::setCodSenderAddress()
     * @uses Letter::setUploadDocument()
     * @param \ColissimoPostage\StructType\Service $service
     * @param \ColissimoPostage\StructType\Parcel $parcel
     * @param \ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations
     * @param \ColissimoPostage\StructType\Sender $sender
     * @param \ColissimoPostage\StructType\Addressee $addressee
     * @param \ColissimoPostage\StructType\CodSenderAddress $codSenderAddress
     * @param \ColissimoPostage\StructType\UploadDocument $uploadDocument
     */
    public function __construct(?\ColissimoPostage\StructType\Service $service = null, ?\ColissimoPostage\StructType\Parcel $parcel = null, ?\ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations = null, ?\ColissimoPostage\StructType\Sender $sender = null, ?\ColissimoPostage\StructType\Addressee $addressee = null, ?\ColissimoPostage\StructType\CodSenderAddress $codSenderAddress = null, ?\ColissimoPostage\StructType\UploadDocument $uploadDocument = null)
    {
        $this
            ->setService($service)
            ->setParcel($parcel)
            ->setCustomsDeclarations($customsDeclarations)
            ->setSender($sender)
            ->setAddressee($addressee)
            ->setCodSenderAddress($codSenderAddress)
            ->setUploadDocument($uploadDocument);
    }
    /**
     * Get service value
     * @return \ColissimoPostage\StructType\Service|null
     */
    public function getService(): ?\ColissimoPostage\StructType\Service
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param \ColissimoPostage\StructType\Service $service
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setService(?\ColissimoPostage\StructType\Service $service = null): self
    {
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get parcel value
     * @return \ColissimoPostage\StructType\Parcel|null
     */
    public function getParcel(): ?\ColissimoPostage\StructType\Parcel
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @param \ColissimoPostage\StructType\Parcel $parcel
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setParcel(?\ColissimoPostage\StructType\Parcel $parcel = null): self
    {
        $this->parcel = $parcel;
        
        return $this;
    }
    /**
     * Get customsDeclarations value
     * @return \ColissimoPostage\StructType\CustomsDeclarations|null
     */
    public function getCustomsDeclarations(): ?\ColissimoPostage\StructType\CustomsDeclarations
    {
        return $this->customsDeclarations;
    }
    /**
     * Set customsDeclarations value
     * @param \ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setCustomsDeclarations(?\ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations = null): self
    {
        $this->customsDeclarations = $customsDeclarations;
        
        return $this;
    }
    /**
     * Get sender value
     * @return \ColissimoPostage\StructType\Sender|null
     */
    public function getSender(): ?\ColissimoPostage\StructType\Sender
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \ColissimoPostage\StructType\Sender $sender
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setSender(?\ColissimoPostage\StructType\Sender $sender = null): self
    {
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get addressee value
     * @return \ColissimoPostage\StructType\Addressee|null
     */
    public function getAddressee(): ?\ColissimoPostage\StructType\Addressee
    {
        return $this->addressee;
    }
    /**
     * Set addressee value
     * @param \ColissimoPostage\StructType\Addressee $addressee
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setAddressee(?\ColissimoPostage\StructType\Addressee $addressee = null): self
    {
        $this->addressee = $addressee;
        
        return $this;
    }
    /**
     * Get codSenderAddress value
     * @return \ColissimoPostage\StructType\CodSenderAddress|null
     */
    public function getCodSenderAddress(): ?\ColissimoPostage\StructType\CodSenderAddress
    {
        return $this->codSenderAddress;
    }
    /**
     * Set codSenderAddress value
     * @param \ColissimoPostage\StructType\CodSenderAddress $codSenderAddress
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setCodSenderAddress(?\ColissimoPostage\StructType\CodSenderAddress $codSenderAddress = null): self
    {
        $this->codSenderAddress = $codSenderAddress;
        
        return $this;
    }
    /**
     * Get uploadDocument value
     * @return \ColissimoPostage\StructType\UploadDocument|null
     */
    public function getUploadDocument(): ?\ColissimoPostage\StructType\UploadDocument
    {
        return $this->uploadDocument;
    }
    /**
     * Set uploadDocument value
     * @param \ColissimoPostage\StructType\UploadDocument $uploadDocument
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setUploadDocument(?\ColissimoPostage\StructType\UploadDocument $uploadDocument = null): self
    {
        $this->uploadDocument = $uploadDocument;
        
        return $this;
    }
}

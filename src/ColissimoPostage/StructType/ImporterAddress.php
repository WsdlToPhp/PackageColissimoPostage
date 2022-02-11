<?php

declare(strict_types=1);

namespace ColissimoPostage\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for importerAddress StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ImporterAddress extends AbstractStructBase
{
    /**
     * The companyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The line0
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line0 = null;
    /**
     * The line1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line1 = null;
    /**
     * The line2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line2 = null;
    /**
     * The line3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line3 = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The phoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $phoneNumber = null;
    /**
     * The mobileNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mobileNumber = null;
    /**
     * The doorCode1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $doorCode1 = null;
    /**
     * The doorCode2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $doorCode2 = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The intercom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $intercom = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The stateOrProvinceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $stateOrProvinceCode = null;
    /**
     * Constructor method for importerAddress
     * @uses ImporterAddress::setCompanyName()
     * @uses ImporterAddress::setLastName()
     * @uses ImporterAddress::setFirstName()
     * @uses ImporterAddress::setLine0()
     * @uses ImporterAddress::setLine1()
     * @uses ImporterAddress::setLine2()
     * @uses ImporterAddress::setLine3()
     * @uses ImporterAddress::setCountryCode()
     * @uses ImporterAddress::setCity()
     * @uses ImporterAddress::setZipCode()
     * @uses ImporterAddress::setPhoneNumber()
     * @uses ImporterAddress::setMobileNumber()
     * @uses ImporterAddress::setDoorCode1()
     * @uses ImporterAddress::setDoorCode2()
     * @uses ImporterAddress::setEmail()
     * @uses ImporterAddress::setIntercom()
     * @uses ImporterAddress::setLanguage()
     * @uses ImporterAddress::setStateOrProvinceCode()
     * @param string $companyName
     * @param string $lastName
     * @param string $firstName
     * @param string $line0
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $countryCode
     * @param string $city
     * @param string $zipCode
     * @param string $phoneNumber
     * @param string $mobileNumber
     * @param string $doorCode1
     * @param string $doorCode2
     * @param string $email
     * @param string $intercom
     * @param string $language
     * @param string $stateOrProvinceCode
     */
    public function __construct(?string $companyName = null, ?string $lastName = null, ?string $firstName = null, ?string $line0 = null, ?string $line1 = null, ?string $line2 = null, ?string $line3 = null, ?string $countryCode = null, ?string $city = null, ?string $zipCode = null, ?string $phoneNumber = null, ?string $mobileNumber = null, ?string $doorCode1 = null, ?string $doorCode2 = null, ?string $email = null, ?string $intercom = null, ?string $language = null, ?string $stateOrProvinceCode = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setLine0($line0)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setCountryCode($countryCode)
            ->setCity($city)
            ->setZipCode($zipCode)
            ->setPhoneNumber($phoneNumber)
            ->setMobileNumber($mobileNumber)
            ->setDoorCode1($doorCode1)
            ->setDoorCode2($doorCode2)
            ->setEmail($email)
            ->setIntercom($intercom)
            ->setLanguage($language)
            ->setStateOrProvinceCode($stateOrProvinceCode);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get line0 value
     * @return string|null
     */
    public function getLine0(): ?string
    {
        return $this->line0;
    }
    /**
     * Set line0 value
     * @param string $line0
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setLine0(?string $line0 = null): self
    {
        // validation for constraint: string
        if (!is_null($line0) && !is_string($line0)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line0, true), gettype($line0)), __LINE__);
        }
        $this->line0 = $line0;
        
        return $this;
    }
    /**
     * Get line1 value
     * @return string|null
     */
    public function getLine1(): ?string
    {
        return $this->line1;
    }
    /**
     * Set line1 value
     * @param string $line1
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setLine1(?string $line1 = null): self
    {
        // validation for constraint: string
        if (!is_null($line1) && !is_string($line1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line1, true), gettype($line1)), __LINE__);
        }
        $this->line1 = $line1;
        
        return $this;
    }
    /**
     * Get line2 value
     * @return string|null
     */
    public function getLine2(): ?string
    {
        return $this->line2;
    }
    /**
     * Set line2 value
     * @param string $line2
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setLine2(?string $line2 = null): self
    {
        // validation for constraint: string
        if (!is_null($line2) && !is_string($line2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line2, true), gettype($line2)), __LINE__);
        }
        $this->line2 = $line2;
        
        return $this;
    }
    /**
     * Get line3 value
     * @return string|null
     */
    public function getLine3(): ?string
    {
        return $this->line3;
    }
    /**
     * Set line3 value
     * @param string $line3
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setLine3(?string $line3 = null): self
    {
        // validation for constraint: string
        if (!is_null($line3) && !is_string($line3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line3, true), gettype($line3)), __LINE__);
        }
        $this->line3 = $line3;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get mobileNumber value
     * @return string|null
     */
    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }
    /**
     * Set mobileNumber value
     * @param string $mobileNumber
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setMobileNumber(?string $mobileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($mobileNumber) && !is_string($mobileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileNumber, true), gettype($mobileNumber)), __LINE__);
        }
        $this->mobileNumber = $mobileNumber;
        
        return $this;
    }
    /**
     * Get doorCode1 value
     * @return string|null
     */
    public function getDoorCode1(): ?string
    {
        return $this->doorCode1;
    }
    /**
     * Set doorCode1 value
     * @param string $doorCode1
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setDoorCode1(?string $doorCode1 = null): self
    {
        // validation for constraint: string
        if (!is_null($doorCode1) && !is_string($doorCode1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doorCode1, true), gettype($doorCode1)), __LINE__);
        }
        $this->doorCode1 = $doorCode1;
        
        return $this;
    }
    /**
     * Get doorCode2 value
     * @return string|null
     */
    public function getDoorCode2(): ?string
    {
        return $this->doorCode2;
    }
    /**
     * Set doorCode2 value
     * @param string $doorCode2
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setDoorCode2(?string $doorCode2 = null): self
    {
        // validation for constraint: string
        if (!is_null($doorCode2) && !is_string($doorCode2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doorCode2, true), gettype($doorCode2)), __LINE__);
        }
        $this->doorCode2 = $doorCode2;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get intercom value
     * @return string|null
     */
    public function getIntercom(): ?string
    {
        return $this->intercom;
    }
    /**
     * Set intercom value
     * @param string $intercom
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setIntercom(?string $intercom = null): self
    {
        // validation for constraint: string
        if (!is_null($intercom) && !is_string($intercom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intercom, true), gettype($intercom)), __LINE__);
        }
        $this->intercom = $intercom;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get stateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode(): ?string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * Set stateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \ColissimoPostage\StructType\ImporterAddress
     */
    public function setStateOrProvinceCode(?string $stateOrProvinceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceCode) && !is_string($stateOrProvinceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateOrProvinceCode, true), gettype($stateOrProvinceCode)), __LINE__);
        }
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        
        return $this;
    }
}

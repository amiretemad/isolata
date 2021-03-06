<?php


namespace Isolta\OpenData\Response;


use Isolta\OpenData\Response\DTO\AddressDTO;
use Isolta\OpenData\Response\DTO\AuxiliaryNameDTO;
use Isolta\OpenData\Response\DTO\BusinessLineDTO;
use Isolta\OpenData\Response\DTO\CompanyFormDTO;
use Isolta\OpenData\Response\DTO\ContactDetailDTO;
use Isolta\OpenData\Response\DTO\LanguagesDTO;
use Isolta\OpenData\Response\DTO\LiquidationDTO;
use Isolta\OpenData\Response\DTO\NameDTO;
use Isolta\OpenData\Response\DTO\RegisteredOfficeDTO;
use Isolta\OpenData\Response\DTO\RegisteredEntryDTO;
use Isolta\OpenData\Response\Interfaces\ApiResponseInterface;
use Isolta\OpenData\Schema\AddressSchema;
use Isolta\OpenData\Traits\BusinessIdTrait;
use Isolta\OpenData\Traits\CompanyFormTrait;
use Isolta\OpenData\Traits\DetailsUriTrait;
use Isolta\OpenData\Traits\NameTrait;
use Isolta\OpenData\Traits\RegistrationDateTrait;

class BusinessIdResponse implements ApiResponseInterface
{

    use BusinessIdTrait,
        NameTrait,
        RegistrationDateTrait,
        CompanyFormTrait,
        DetailsUriTrait;

    /**
     * @var LiquidationDTO[]
     */
    protected $liquidations = [];

    /**
     * @var NameDTO[]
     */
    protected $names = [];

    /**
     * @var AuxiliaryNameDTO[]
     */
    public $auxiliaryNames = [];

    /**
     * @var AddressDTO[]
     */
    public $addresses = [];

    /**
     * @var CompanyFormDTO[]
     */
    public $companyForms = [];

    /**
     * @var BusinessLineDTO[]
     */
    public $businessLines = [];

    /**
     * @var LanguagesDTO[]
     */
    public $languages = [];

    /**
     * @var RegisteredOfficeDTO[]
     */
    public $registeredOffices = [];

    /**
     * @var ContactDetailDTO[]
     */
    public $contactDetails = [];

    /**
     * @var RegisteredEntryDTO[]
     */
    public $registeredEntries = [];

    /**
     * @return LiquidationDTO[]
     */
    public function getLiquidations(): array
    {
        return $this->liquidations;
    }

    /**
     * @param LiquidationDTO $liquidations
     */
    public function setLiquidations(LiquidationDTO $liquidations)
    {
        $this->liquidations[] = $liquidations;
    }

    /**
     * @return NameDTO[]
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param NameDTO $names
     * @return BusinessIdResponse
     */
    public function setNames(NameDTO $names): self
    {
        $this->names[] = $names;
        return $this;
    }

    /**
     * @return AuxiliaryNameDTO[]
     */
    public function getAuxiliaryNames(): array
    {
        return $this->auxiliaryNames;
    }

    /**
     * @param AuxiliaryNameDTO $auxiliaryNames
     */
    public function setAuxiliaryNames(AuxiliaryNameDTO $auxiliaryNames)
    {
        $this->auxiliaryNames[] = $auxiliaryNames;
    }

    /**
     * @return AddressDTO[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param AddressDTO $addresses
     */
    public function setAddresses(AddressDTO $addresses)
    {
        $this->addresses[] = $addresses;
    }

    /**
     * @return CompanyFormDTO[]
     */
    public function getCompanyForms(): array
    {
        return $this->companyForms;
    }

    /**
     * @param CompanyFormDTO $companyForms
     */
    public function setCompanyForms(CompanyFormDTO $companyForms)
    {
        $this->companyForms = $companyForms;
    }

    /**
     * @return BusinessLineDTO[]
     */
    public function getBusinessLines(): array
    {
        return $this->businessLines;
    }

    /**
     * @param BusinessLineDTO $businessLines
     */
    public function setBusinessLines(BusinessLineDTO $businessLines)
    {
        $this->businessLines = $businessLines;
    }

    /**
     * @return LanguagesDTO[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @param LanguagesDTO $languages
     */
    public function setLanguages(LanguagesDTO $languages)
    {
        $this->languages[] = $languages;
    }

    /**
     * @return RegisteredOfficeDTO[]
     */
    public function getRegisteredOffices(): array
    {
        return $this->registeredOffices;
    }

    /**
     * @param RegisteredOfficeDTO $registeredOffices
     */
    public function setRegisteredOffices(RegisteredOfficeDTO $registeredOffices)
    {
        $this->registeredOffices = $registeredOffices;
    }

    /**
     * @return ContactDetailDTO[]
     */
    public function getContactDetails(): array
    {
        return $this->contactDetails;
    }

    /**
     * @param ContactDetailDTO $contactDetails
     */
    public function setContactDetails(ContactDetailDTO $contactDetails)
    {
        $this->contactDetails[] = $contactDetails;
    }

    /**
     * @return RegisteredEntryDTO[]
     */
    public function getRegisteredEntries(): array
    {
        return $this->registeredEntries;
    }

    /**
     * @param RegisteredEntryDTO $registeredEntries
     */
    public function setRegisteredEntries(RegisteredEntryDTO $registeredEntries)
    {
        $this->registeredEntries[] = $registeredEntries;
    }

    /**
     * @return AddressDTO|null
     */
    public function getLastAddress(): ?AddressDTO
    {
        $array = $this->getAddresses();

        return $array ? end($array) : null;
    }

    /**
     * @return string|null
     */
    public function getWebsiteAddress()
    {
        $websiteAddress = array_filter($this->getContactDetails(), function ($data) {
            return mb_strtolower($data->getContactDetailType()) === 'website address';
        });

        return $websiteAddress ? reset($websiteAddress)->getValue() : null;
    }

}
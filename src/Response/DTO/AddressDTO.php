<?php

namespace Isolta\OpenData\Response\DTO;

use Isolta\OpenData\Traits\CareOfTrait;
use Isolta\OpenData\Traits\CityTrait;
use Isolta\OpenData\Traits\CountryTrait;
use Isolta\OpenData\Traits\EndDateTrait;
use Isolta\OpenData\Traits\LanguageTrait;
use Isolta\OpenData\Traits\PostCodeTrait;
use Isolta\OpenData\Traits\RegistrationDateTrait;
use Isolta\OpenData\Traits\SourceTrait;
use Isolta\OpenData\Traits\StreetTrait;
use Isolta\OpenData\Traits\TypeTrait;
use Isolta\OpenData\Traits\VersionTrait;

class AddressDTO
{

    use CareOfTrait,
        StreetTrait,
        PostCodeTrait,
        TypeTrait,
        VersionTrait,
        CityTrait,
        CountryTrait,
        RegistrationDateTrait,
        EndDateTrait,
        LanguageTrait,
        SourceTrait;

}
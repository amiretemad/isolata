<?php

namespace Isolta\OpenData\Response\DTO;

use Isolta\OpenData\Traits\EndDateTrait;
use Isolta\OpenData\Traits\LanguageTrait;
use Isolta\OpenData\Traits\NameTrait;
use Isolta\OpenData\Traits\RegistrationDateTrait;
use Isolta\OpenData\Traits\SourceTrait;
use Isolta\OpenData\Traits\TypeTrait;
use Isolta\OpenData\Traits\VersionTrait;

class CompanyFormDTO
{

    use VersionTrait,
        NameTrait,
        TypeTrait,
        RegistrationDateTrait,
        EndDateTrait,
        LanguageTrait,
        SourceTrait;
}
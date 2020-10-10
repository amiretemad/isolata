<?php


namespace Isolta\OpenData\Response\DTO;

use Isolta\OpenData\Traits\ContactDetailTypeTrait;
use Isolta\OpenData\Traits\EndDateTrait;
use Isolta\OpenData\Traits\LanguageTrait;
use Isolta\OpenData\Traits\RegistrationDateTrait;
use Isolta\OpenData\Traits\SourceTrait;
use Isolta\OpenData\Traits\ValueTrait;
use Isolta\OpenData\Traits\VersionTrait;

class ContactDetailDTO
{

    use VersionTrait,
        ValueTrait,
        ContactDetailTypeTrait,
        RegistrationDateTrait,
        EndDateTrait,
        LanguageTrait,
        SourceTrait;
}
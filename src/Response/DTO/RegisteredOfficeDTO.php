<?php

namespace Isolta\OpenData\Response\DTO;

use Isolta\OpenData\Traits\AuthorityTrait;
use Isolta\OpenData\Traits\DescriptionTrait;
use Isolta\OpenData\Traits\EndDateTrait;
use Isolta\OpenData\Traits\LanguageTrait;
use Isolta\OpenData\Traits\RegisterTrait;
use Isolta\OpenData\Traits\RegistrationDateTrait;
use Isolta\OpenData\Traits\StatusDateTrait;
use Isolta\OpenData\Traits\StatusTrait;

class RegisteredOfficeDTO extends NameDTO
{
    use LanguageTrait;
}
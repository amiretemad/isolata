<?php

namespace Isolta\OpenData\Response\DTO;

use Isolta\OpenData\Response\Traits\AuthorityTrait;
use Isolta\OpenData\Response\Traits\DescriptionTrait;
use Isolta\OpenData\Response\Traits\EndDateTrait;
use Isolta\OpenData\Response\Traits\LanguageTrait;
use Isolta\OpenData\Response\Traits\RegisterTrait;
use Isolta\OpenData\Response\Traits\RegistrationDateTrait;
use Isolta\OpenData\Response\Traits\StatusDateTrait;
use Isolta\OpenData\Response\Traits\StatusTrait;

class RegistedOfficeDTO extends NameDTO
{
    use LanguageTrait;
}
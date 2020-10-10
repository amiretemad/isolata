<?php


namespace Isolta\OpenData\Response\DTO;


use Isolta\OpenData\Response\Traits\EndDateTrait;
use Isolta\OpenData\Response\Traits\LanguageTrait;
use Isolta\OpenData\Response\Traits\NameTrait;
use Isolta\OpenData\Response\Traits\RegistrationDateTrait;
use Isolta\OpenData\Response\Traits\SourceTrait;
use Isolta\OpenData\Response\Traits\VersionTrait;

class LanguagesDTO
{

    use SourceTrait,
        VersionTrait,
        RegistrationDateTrait,
        EndDateTrait,
        NameTrait,
        LanguageTrait;

}


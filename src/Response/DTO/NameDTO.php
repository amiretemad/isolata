<?php

namespace Isolta\OpenData\Response\DTO;

use Isolta\OpenData\Traits\EndDateTrait;
use Isolta\OpenData\Traits\NameTrait;
use Isolta\OpenData\Traits\OrderTrait;
use Isolta\OpenData\Traits\RegistrationDateTrait;
use Isolta\OpenData\Traits\SourceTrait;
use Isolta\OpenData\Traits\VersionTrait;

class NameDTO
{

    use OrderTrait,
        VersionTrait,
        NameTrait,
        RegistrationDateTrait,
        EndDateTrait,
        SourceTrait;

}
<?php


namespace Isolta\OpenData\Schema;


use Isolta\OpenData\Traits\AddressTrait;
use Isolta\OpenData\Traits\NameTrait;
use Isolta\OpenData\Traits\WebsiteTrait;

class BusinessSchema
{
    use NameTrait,
        WebsiteTrait,
        AddressTrait;
}
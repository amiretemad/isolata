<?php


namespace Isolta\OpenData\Schema;


use Isolta\OpenData\Traits\CityTrait;
use Isolta\OpenData\Traits\PostCodeTrait;
use Isolta\OpenData\Traits\StreetTrait;

class AddressSchema
{

    use StreetTrait,
        CityTrait,
        PostCodeTrait;

}
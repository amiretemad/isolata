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


    public function __toString()
    {
        return sprintf('Street: %s , City: %s , PostCode: %s', $this->getStreet(), $this->getCity(), $this->getPostCode());
        // TODO: Implement __toString() method.
    }
}
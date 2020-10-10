<?php


namespace Isolta\OpenData\Traits;

use Isolta\OpenData\Schema\AddressSchema;

/**
 * Trait AddressTrait
 * @package Isolta\OpenData\Traits
 */
trait AddressTrait
{

    /**
     * @var AddressSchema
     */
    protected $address;

    /**
     * @return AddressSchema
     */
    public function getAddress(): ?AddressSchema
    {
        return $this->address;
    }

    /**
     * @param AddressSchema|null $address
     * @return self
     */
    public function setAddress(?AddressSchema $address): self
    {
        $this->address = $address;

        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait StreetTrait
 * @package Isolta\OpenData\Traits
 */
trait StreetTrait
{

    /**
     * @var string
     */
    protected $street;

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     * @return $this
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait CareOfTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param string $street
     * @return $this
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait CountryTrait
{

    /**
     * @var string
     */
    protected $country;

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

}
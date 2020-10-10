<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait CountryTrait
 * @package Isolta\OpenData\Traits
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
     * @param string|null $country
     * @return $this
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

}
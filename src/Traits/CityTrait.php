<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait CityTrait
 * @package Isolta\OpenData\Traits
 */
trait CityTrait
{

    /**
     * @var string
     */
    protected $city;

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

}
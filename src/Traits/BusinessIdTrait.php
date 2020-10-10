<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait BusinessIdTrait
 * @package Isolta\OpenData\Traits
 */
trait BusinessIdTrait
{

    /**
     * @var string
     */
    protected $businessId;

    /**
     * @return string
     */
    public function getBusinessId(): ?string
    {
        return $this->businessId;
    }

    /**
     * @param string|null $businessId
     * @return $this
     */
    public function setBusinessId(?string $businessId): self
    {
        $this->businessId = $businessId;

        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param string $businessId
     * @return $this
     */
    public function setBusinessId(?string $businessId): self
    {
        $this->businessId = $businessId;

        return $this;
    }

}
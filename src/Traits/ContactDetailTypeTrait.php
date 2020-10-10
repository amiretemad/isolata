<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait ContactDetailTypeTrait
 * @package Isolta\OpenData\Traits
 */
trait ContactDetailTypeTrait
{

    /**
     * @var int
     */
    protected $contactDetailType;

    /**
     * @return string
     */
    public function getContactDetailType(): ?string
    {
        return $this->contactDetailType;
    }

    /**
     * @param string|null contactDetailType
     * @return $this
     */
    public function setContactDetailType(?string $contactDetailType): self
    {
        $this->contactDetailType = $contactDetailType;

        return $this;
    }

}
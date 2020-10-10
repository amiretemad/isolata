<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait DescriptionTrait
 * @package Isolta\OpenData\Traits
 */
trait DescriptionTrait
{

    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

}
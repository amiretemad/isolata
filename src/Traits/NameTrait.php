<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait NameTrait
 * @package Isolta\OpenData\Traits
 */
trait NameTrait
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

}
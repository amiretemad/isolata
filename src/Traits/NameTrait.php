<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param string $name
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

}
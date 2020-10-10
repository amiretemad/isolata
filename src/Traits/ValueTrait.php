<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait ValueTrait
 * @package Isolta\OpenData\Traits
 */
trait ValueTrait
{

    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

}
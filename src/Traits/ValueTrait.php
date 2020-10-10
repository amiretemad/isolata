<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param string $value
     * @return $this
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

}
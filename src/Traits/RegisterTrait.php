<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait RegisterTrait
 * @package Isolta\OpenData\Traits
 */
trait RegisterTrait
{

    /**
     * @var int
     */
    protected $register;

    /**
     * @return int
     */
    public function getRegister(): ?int
    {
        return $this->register;
    }

    /**
     * @param int|null $register
     * @return $this
     */
    public function setRegister(?int $register): self
    {
        $this->register = $register;

        return $this;
    }

}
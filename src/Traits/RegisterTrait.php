<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param int $register
     * @return $this
     */
    public function setRegister(?int $register): self
    {
        $this->register = $register;

        return $this;
    }

}
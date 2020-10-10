<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait StatusTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait StatusTrait
{

    /**
     * @var int
     */
    protected $status;

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

}
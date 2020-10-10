<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait OrderTrait
{

    /**
     * @var int
     */
    protected $order;

    /**
     * @return int
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }

    /**
     * @param int $order
     * @return $this
     */
    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait TypeTrait
 * @package Isolta\OpenData\Traits
 */
trait TypeTrait
{

    /**
     * @var int
     */
    protected $type;

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int|null $type
     * @return $this
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

}
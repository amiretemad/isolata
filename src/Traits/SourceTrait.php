<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait SourceTrait
 * @package Isolta\OpenData\Traits
 */
trait SourceTrait
{

    /**
     * @var int
     */
    protected $source;

    /**
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param int|null $source
     * @return $this
     */
    public function setSource(?int $source) : self
    {
        $this->source = $source;

        return $this;
    }

}
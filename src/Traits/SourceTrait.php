<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param int $source
     * @return $this
     */
    public function setSource(?int $source) : self
    {
        $this->source = $source;

        return $this;
    }

}
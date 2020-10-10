<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait VersionTrait
{

    /**
     * @var int
     */
    protected $version;

    /**
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * @param int|null $version
     * @return $this
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }

}
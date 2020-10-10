<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait CareOfTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait CareOfTrait
{

    /**
     * @var string
     */
    protected $careOf;

    /**
     * @return string
     */
    public function getCareOf(): ?string
    {
        return $this->careOf;
    }

    /**
     * @param string $careOf
     * @return $this
     */
    public function setCareOf(?string $careOf): self
    {
        $this->careOf = $careOf;

        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait DetailsUriTrait
 * @package Isolta\OpenData\Traits
 */
trait DetailsUriTrait
{

    /**
     * @var string
     */
    protected $detailsUri;

    /**
     * @return string
     */
    public function getDetailsUri(): ?string
    {
        return $this->detailsUri;
    }

    /**
     * @param string|null $detailsUri
     * @return $this
     */
    public function setDetailsUri(?string $detailsUri): self
    {
        $this->detailsUri = $detailsUri;

        return $this;
    }

}
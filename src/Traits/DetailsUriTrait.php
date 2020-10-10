<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param string $detailsUri
     * @return $this
     */
    public function setDetailsUri(?string $detailsUri): self
    {
        $this->detailsUri = $detailsUri;

        return $this;
    }

}
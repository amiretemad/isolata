<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait WebsiteTrait
{

    /**
     * @var string
     */
    protected $website;

    /**
     * @return string
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     * @return $this
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

}
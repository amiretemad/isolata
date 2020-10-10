<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait LanguageTrait
 * @package Isolta\OpenData\Traits
 */
trait LanguageTrait
{

    /**
     * @var string
     */
    protected $language;

    /**
     * @return string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return $this
     */
    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

}
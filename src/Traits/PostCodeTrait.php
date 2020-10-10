<?php


namespace Isolta\OpenData\Traits;


/**
 * Trait
 * @package Isolta\OpenData\Response\Traits
 */
trait PostCodeTrait
{

    /**
     * @var string
     */
    protected $postCode;

    /**
     * @return string
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return $this
     */
    public function setPostCode(?string $postCode) : self
    {
        $this->postCode = $postCode;
        return $this;
    }

}
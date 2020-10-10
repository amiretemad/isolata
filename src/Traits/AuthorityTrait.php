<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait AuthorityTrait
{

    /**
     * @var int
     */
    protected $authority;

    /**
     * @return int
     */
    public function getAuthority(): ?int
    {
        return $this->authority;
    }

    /**
     * @param int|null $authority
     * @return $this
     */
    public function setAuthority(?int $authority): self
    {
        $this->authority = $authority;

        return $this;
    }

}
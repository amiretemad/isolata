<?php


namespace Isolta\OpenData\Traits;

use DateTime;

/**
 * Trait StatusDateTrait
 * @package Isolta\OpenData\Traits
 */
trait StatusDateTrait
{

    /**
     * @var DateTime
     */
    protected $statusDate;

    /**
     * @return DateTime
     */
    public function getStatusDate(): ?DateTime
    {
        return $this->statusDate;
    }

    /**
     * @param string|null $statusDate
     * @return $this
     */
    public function setStatusDate(?string $statusDate): self
    {
        $this->statusDate = $statusDate;

        return $this;
    }

}
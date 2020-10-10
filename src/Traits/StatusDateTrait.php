<?php


namespace Isolta\OpenData\Traits;

use DateTime;

/**
 * Trait StatusTrait
 * @package Isolta\OpenData\Response\Traits
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
     * @param string $statusDate
     * @return $this
     */
    public function setStatusDate(?string $statusDate): self
    {
        $this->statusDate = $statusDate;

        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

use DateTime;

/**
 * Trait
 * @package Isolta\OpenData\Response\Traits
 */
trait EndDateTrait
{

    /**
     * @var DateTime
     */
    protected $endDate;

    /**
     * @return DateTime
     */
    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    /**
     * @param string|null $endDate
     * @return $this
     */
    public function setEndDate(?string $endDate): self
    {
        if (null !== $endDate) {

            $formattedDate = datetime::createFromFormat('Y-m-d', $endDate);

            if (datetime::getLastErrors()['error_count'] === 0) {
                $this->endDate = $formattedDate->setTime(0, 0, 0);
            }
        }


        return $this;
    }

}
<?php


namespace Isolta\OpenData\Traits;

use DateTime;

/**
 * Trait RegistrationDateTrait
 * @package Isolta\OpenData\Traits
 */
trait RegistrationDateTrait
{

    /**
     * @var DateTime
     */
    protected $registrationDate;

    /**
     * @return DateTime
     */
    public function getRegistrationDate(): ?DateTime
    {
        return $this->registrationDate;
    }

    /**
     * @param string|null $registrationDate
     * @return $this
     */
    public function setRegistrationDate(?string $registrationDate): self
    {
        if (null !== $registrationDate) {

            $formattedDate = datetime::createFromFormat('Y-m-d', $registrationDate);

            if (datetime::getLastErrors()['error_count'] === 0) {
                $this->registrationDate = $formattedDate->setTime(0, 0, 0);
            }
        }

        return $this;
    }

}
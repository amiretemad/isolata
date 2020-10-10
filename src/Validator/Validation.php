<?php


namespace Isolta\OpenData\Validator;


use Isolta\OpenData\Exception\ValidationException;

class Validation
{

    /**
     * @param string $businessId
     * @return string|string[]
     * @throws ValidationException
     */
    public static function validateBusinessId(string $businessId)
    {
        $businessId = str_replace(' ', '', $businessId);
        if ($businessId === '') {
            throw new ValidationException('Business id could not be empty.');
        }

        return $businessId;
    }

}